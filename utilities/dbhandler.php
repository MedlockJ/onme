<?php

$server = "localhost";
$user = "bo003448";
$pass = "Students1!";
$db = "bo003448";

$connection = mysqli_connect($server, $user, $pass, $db);

if(!$connection){
    die("connection failed: " . mysqli_connect_error());
}