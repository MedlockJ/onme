<?php
    session_start();
    include_once "utilities/cookies.php";
    include_once "data/avatar-measurements.php";

    function renderAccountView() { ?>
        <div class="safe-area-view" view-id="account" view-title="Onme ID" active="true">
            <div class="layout-container large-gap">
                <div class="profile-info-container">
                    <img class="image profile-image" src="assets/images/profile.jpg" alt="Profile Picture">
                    <div class="layout-container tiny-gap">
                        <h1 class="header secondary no-bold"><?=$VAR?></h1>
                        <p class="text understated text-size-extra-small">
                            <?php echo $_SESSION["usersEmail"]; ?>
                        </p>
                    </div>
                </div>
                <div class="avatar-measurement-display-container">
                    <?php
                        global $avatarMeasurementData;
                        $measurements = getAppData("avatar")["measurements"];
                        $i = 0;
                        $length = sizeof($measurements);
                        foreach ($measurements as $name => $measurement) { 
                            $min = $avatarMeasurementData[ucfirst($name)]["range"][0];
                            $max = $avatarMeasurementData[ucfirst($name)]["range"][1];
                            ?>
                            <div class="layout-container column-flow center-contents-vertical">
                                <p class="text text-size-small"><?= ucfirst($name); ?></p>
                                <div class="avatar-measurement-graphic <?= $name == "height" ? "height" : ""; ?>" measurement="<?= $name; ?>" measurement-min="<?= $min; ?>" measurement-max="<?= $max; ?>" measurement-value=<?= getActualMeasurementValue(ucfirst($name), $measurement); ?>></div>
                            </div>
                            <?php 
                                if ($i < $length - 1) { ?>
                                    <hr class="separator dark no-gap">
                            <?php } 
                            $i++ ?>
                    <?php } ?>
                </div>
                <button class="button understated" component-id="avatar-customize-button">Edit Avatar</button>
            </div>
        </div>
<?php }