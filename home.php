<?php 
    session_start();

    if(!isset($_SESSION['userID']) || !isset($_SESSION['logged_in'])){
        //User not logged in. Redirect them back to the login.php page.
        header('Location: login.php');
        exit;
    }

    echo "<strong><br>Welcome to your homepage, $_SESSION[firstName]<br></strong>";
    var_dump($_SESSION);




?>