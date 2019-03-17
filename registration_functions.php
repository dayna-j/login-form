<?php
    include_once('./db.php');

    function validateUsernameSyntax($username){
        //   username rules:
        //  1) Must  use at least 4 characters
        //  2) Acceptable character set:  [ 'a-z', 'A-Z', '0-9', '-', '_' ]
        //  3) Cannot start with a number or '-', '_'
        //  4) Cannot be empty  <--handled before username is passed into this function
        
        //  regular expression: 
        //      ^[^0-9,-_][a-zA-Z0-9,-_]{3,}

        $regex = "/^[^0-9,-_][a-zA-Z0-9,-_]{3,}/";
        return preg_match($regex, $username);

        // if( is_numeric(substr($username, 0,1))) {
        //     // check whether the first character of the username is numeric
        //     echo "<br><strong>Username cannot start with a number or special character!<br></strong>";
        //     $isValid = false;
        // }
        
        // if( strlen($username) < 4 ){
        //     echo "<strong>Username is too short: must be at least 4 characters!<br></strong>";
        //     $isValid = false;
        // };
    }

    function validatePasswordSyntax($password){
        //  password rules: 
        // 
        //  1) password should be at least 8 characters long
        //  2) password should include at least 1 number
        //  3) password should include at least 1 special character

        $regex = '//';
        return preg_match($regex, $password);

    }

    function passwordsMatch($pwd1,$pwd2){
        return $pwd1 == $pwd2;
    }
    

    function doesUserExist($username){
        global $conn;
        
        $sqlQuery = 'SELECT COUNT(userName) AS num FROM users WHERE userName = :username';
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $row["num"];
    }



?>