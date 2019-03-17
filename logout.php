<?php 
    session_start();
    // session data exists
    print_r($_SESSION);
    // destroy the session 
    session_unset();    
    session_destroy(); 
    // session data is destroyed
    print_r($_SESSION);
?>

<html>
    <head>

    </head>
    <body>
        <strong><br>You are now logged out!</strong>
    </body>
</html>