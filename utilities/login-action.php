<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'dbhandler.php';
    require_once 'account-functions.php';

    
}