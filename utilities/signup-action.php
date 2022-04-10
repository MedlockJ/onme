<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["name"];
    $name = $_POST["name"];
}else{
    header("location: ../signup.php");
}