<?php

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
    // the db query with 'named' placeholder, :username
    $sqlQuery = "SELECT * FROM users WHERE userName = :username";
    // 
    $stmt = $conn->prepare($sqlQuery);
    // print_r($stmt);
    // echo "<br>";
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // print_r($user);

    if(!$user){
        exit("<br><strong>Incorrect username/password</strong>");
    } else {
        // compare passwordAttempt to password in database
        if($passwordAttempt !== $user['password']) 
            echo "<br><strong>password is incorrect</strong>";
        else
             echo "<br><strong>passwords matched</strong>";

            // user exists in database and passwords match
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['logged_in'] = time();
            $_SESSION['firstName'] = $user['firstName'];
            $_SESSION['lastName'] = $user['lastName'];
            $_SESSION['email'] = $user['emailAddress'];
            
            // relocate user to their home page
            header('Location: home.php');



    }
    

    // print_r($stmt);


}


?>

