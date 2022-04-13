<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>Sign Up - Onme</title>
    </head>
    <body>
        <div class="simulated-device">
            <div class="view-container" id="master">
                <div class="safe-area-view" view-id="landing" view-title="" active="true">
                    <div class="layout-container landing-page-view-container">
                        <div class="layout-container">
                            <div class="layout-container brand-assets-container">
                                <img class="image brand-logo" src="assets/images/logo.png" alt="Onme Logo">
                                <p class="text text-centered center-self">Sign Up</p>
                                <form class="center-self" id="signup-form" action="utilities/signup-action.php" method="post">
                                    <label for="name">Name</label><br>
                                    <input type="text" id="name" name="name"><br>
                                    <label for="email">Email</label><br>
                                    <input type="text" id="email" name="email"><br>
                                    <label for="username">Username</label><br>
                                    <input type="text" id="username" name="username"><br>
                                    <label for="password">Password</label><br>
                                    <input type="password" id="password" name="password"><br>
                                    <label for="password-confirm">Confirm Password</label><br>
                                    <input type="password" id="password-confirm" name="password-confirm"><br>
                                </form>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyinput"){
                                    echo "<h4>Please fill all fields!<h4>";
                                }else if($_GET["error"] == "invalidUsername"){
                                    echo "<h4>user's Name can only have letters and numbers!<h4>";
                                }else if($_GET["error"] == "invalidEmail"){
                                    echo "<h4>Invalid Email<h4>";
                                }else if($_GET["error"] == "passwordIncorrect"){
                                    echo "<h4>Password Incorrect<h4>";
                                }else if($_GET["error"] == "userInUse"){
                                    echo "<h4>Username is already in use<h4>";
                                }else if($_GET["error"] == "UIUstatmentFailed"){
                                    echo "<h4>Unknown Error = UIU. Please contact Customer Support!<h4>";
                                }else if($_GET["error"] == "CREATEUSERstatmentFailed"){
                                    echo "<h4>Unknown Error = CU. Please contact Customer Support!<h4>";
                                }else if($_GET["error"] == "false"){
                                    header("location: landing.php");
                                }
                            }
                        ?>
                        <button class="button" type="submit" name="submit" form="signup-form">Sign Up</button>
                        <a class="button" href="landing.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>