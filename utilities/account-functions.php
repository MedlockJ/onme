<?php

function emptyInputSignup($name, $email, $username, $password, $passwordconfirm){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordconfirm)){
        $result = true;
    }else{
        $result = false;
    }
    
    return $result;
}

function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/"), $username){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function passwordIncorrect($password, $passwordconfirm){
    $result;
    if($password !== $passwordconfirm){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function userInUse($username, $email, $connection){
    $sqlStatement = "SELECT * FROM accounts WHERE username = ? OR email = ?;";
    $preparedStatment = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($sqlStatement, $preparedStatment)){
        header("location: ../signup.php?error=statmentFailed");
        exit();
    }

    mysqli_stmt_bind_param($preparedStatment, "ss", $username, $email);
    mysqli_stmt_execute($preparedStatment);

    $result = mysqli_stmt_get_result($preparedStatment);

    if(mysqli_fetch_assoc($result)){

    }else{
        $result = false;
    }
}

function createUser($name, $email, $username, $password, $passwordconfirm, $connection){

}