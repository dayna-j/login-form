<?php

// echo print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];
$validLogin = true;

if(empty($username)){
    echo "<strong>username is required!</strong><br>";
    $validLogin = false;
} else if(empty($password)){
    echo "<strong>password is required!</strong><br>";
    $validLogin = false;
}

if($validLogin) echo "<strong>Login has been validated!</strong>";



?>
