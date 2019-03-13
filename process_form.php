<?php

//   username rules:
//  1) Must  use at least 4 characters
//  2) Acceptable character set:  [ 'a-z', 'A-Z', '-', '_' ]
//  3) Cannot start with a number
//  4) Cannot be empty

// establish connection with database..
session_start();
include_once('./db.php');

if(empty($_POST['login'])) exit('Form was not submitted.  How did you even get here??');

$validDBLogin = true;
$username = !empty($_POST['username']) ? trim($_POST['username']) : null; 
$passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null; 


if(!isset($username)){
    echo "<strong>username is required!</strong><br>";
    exit();
    $validDBLogin = false;
} else if(!isset($password)){
    echo "<strong>password is required!</strong><br>";
    $validDBLogin = false;
    exit();
}

if($validDBLogin){
    class User{};
    
    $sqlQuery = "SELECT userID, userName, password FROM users WHERE userName = :username";
    // print_r($conn);
    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($user);

    if(!$user){
        exit("<br><strong>Incorrect username/password</strong>");
    }
    

    // print_r($stmt);


}




//echo "<strong>Login has been validated!</strong>";



?>
