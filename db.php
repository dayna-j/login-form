<?php
// establish connection to database
$host='localhost';
$db = 'login-form';
$username = 'root';
$password = '';
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
);

$dsn = "mysql:host=$host;dbname=$db";

function login($dsn,$username,$password, $pdoOptions){
    session_start();
    try {
        $conn = new PDO($dsn, $username, $password, $pdoOptions);

        if($conn){
            echo "connection to db has been made<br>";
            print_r($conn);
            return $conn;
        } } catch (PDOException $e) {
            echo $e->getMessage();
       }

}

$conn = login($dsn,$username,$password,$pdoOptions);
// print_r($conn);

?>