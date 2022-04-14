<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>Login - Onme</title>
    </head>
    <body>
        <div class="simulated-device">
            <div class="view-container" id="master">
                <div class="safe-area-view" view-id="landing" view-title="" active="true">
                    <div class="layout-container landing-page-view-container">
                        <div class="layout-container">
                            <div class="layout-container brand-assets-container">
                                <img class="image brand-logo" src="assets/images/logo.png">
                                <p class="text text-centered center-self">Login</p>
                                <form class="center-self" id="login-form" action="utilities/login-action.php" method="post">
                                    <label for="username">Username</label><br>
                                    <input type="text" id="username" name="username" placeholder="username@email.com"><br><br><!--username box with placholder-->
                                    <label for="password">Password</label><br>
                                    <input type="text" id="password" name="password" placeholder="pswrd1234"><br><!--password box with placeholder-->
                                </form>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyinput"){
                                    echo "<h4>Please fill all fields!<h4>";
                                }else if($_GET["error"] == "wronglogin"){
                                    echo "<h4>Incorrect Username OR Password<h4>";
                                }
                            }
                        ?>
                        <button class="button" type="submit" name="submit" form="login-form">Login</button>
                        <a class="button" href="landing.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
