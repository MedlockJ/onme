<?php
    session_start()
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
                <div class="view no-bottom-nav" view-id="root">
                    <div class="layout-container center-contents">
                        <form class="view-container">
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email"><br>
                            <label for="username">Username</label><br>
                            <input type="text" id="username" name="username"><br>
                            <label for="password">Password</label><br>
                            <input type="text" id="password" name="password"><br>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>