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
                                <img class="image brand-logo" src="assets/images/logo.png">
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
                        <button class="button" type="submit" name="submit" form="signup-form">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>