<?php 
    session_start();
    print_r($_SESSION);
    session_unset();    
// destroy the session 
    session_destroy(); 
    print_r($_SESSION);


?>

<html>
    <body>
        You are now logged out!
    </body>
</html>