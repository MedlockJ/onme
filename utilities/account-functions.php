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
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
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
//  
function userInUse($connection, $username, $email){
    $sqlStatement = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $preparedStatment = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($preparedStatement, $sqlStatment)){
        header("location: ../signup.php?error=UIUstatmentFailed");
        exit();
    }

    mysqli_stmt_bind_param($preparedStatment, "ss", $username, $email);
    mysqli_stmt_execute($preparedStatment);

    printf("Error: %s.\n", mysqli_stmt_error($stmt));

    $resultData = mysqli_stmt_get_result($preparedStatment);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($preparedStatment);
}

function createUser($name, $email, $username, $password, $connection){
    $sqlStatement = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $preparedStatment = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($sqlStatement, $preparedStatment)){
        header("location: ../signup.php?error=CREATEUSERstatmentFailed-");
        exit();
    }

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($preparedStatment, "ssss", $name, $email, $username, $hashPassword);
    mysqli_stmt_execute($preparedStatment);
    mysqli_stmt_close($preparedStatment);

    header("location: ../signup.php?error=false");
    exit();
}

function emptyInputLogin($username, $password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    
    return $result;
}

function loginUser($connection, $username, $password){
    $usernameExists = userInUse($connection, $username, $username);
    if($usernameExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $usernameExists["usersPwd"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }else if($checkPassword === true){
        session_start();
        $_SESSION["usersid"] = $usernameExists["usersId"];
        $_SESSION["usersName"] = $usernameExists["usersName"];
        $_SESSION["usersEmail"] = $usernameExists["usersEmail"];
        header("location: ../onboarding.php");
        exit();
    }
}