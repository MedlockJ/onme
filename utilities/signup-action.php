<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordconfirm = $_POST["password-confirm"];

    require_once 'dbhandler.php';
    require_once 'account-functions.php';

    if(emptyInputSignup($name, $email, $username, $password, $passwordconfirm) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(invalidUsername($username) !== false){
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }

    if(passwordIncorrect($password, $passwordconfirm) !== false){
        header("location: ../signup.php?error=passwordIncorrect");
        exit();
    }

    if(userInUse($connection, $username, $email) !== false){
        header("location: ../signup.php?error=userInUse");
        exit();
    }

    createUser($name, $email, $username, $password, $connection);
}else{
    header("location: ../signup.php");
    exit();
}