<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'dbhandler.php';
    require_once 'account-functions.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $username, $password);
}else{
    header("location: ../login.php");
    exit();
}