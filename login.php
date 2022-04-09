<?php
    session_start()
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
                                <form class="center-self" id="login-form" action="login-action.php" method="post">
                                    <label for="username">Username</label><br>
                                    <input type="text" id="username" name="username"><br>
                                    <label for="password">Password</label><br>
                                    <input type="text" id="password" name="password"><br>
                                </form>
                            </div>
                        </div>
                        <button class="button" type="submit" name="submit" form="login-form">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>