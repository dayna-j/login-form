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
        //  4) password should include at least 1 uppercase character
        //  5) password should include at least 1 lowercase character

        $regex = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';
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

    function doesEmailExist($email){
        global $conn;
        $sqlQuery = 'SELECT COUNT(emailAddress) AS num FROM users WHERE emailAddress = :email';
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row["num"];
    }

    function validateFirstNameSyntax($firstName){
        // alphabetical characters only
        // 40 characters or less
        $regex = '/[a-zA-Z]{3,40}$/';
        return preg_match($regex,$firstName);
    }

    function validateLastNameSyntax($lastName){
        // alphabetical characters only
        // 40 characters or less
        $regex = '/[a-zA-Z]{3,40}$/';
        return preg_match($regex,$lastName);
    }


    function registerUser($username,$password1,$email,$firstName,$lastName){
        global $conn;
        $sqlQuery = '
                INSERT INTO users
                     (userName,password,firstName,lastName,emailAddress)
                VALUES
                    (:username,:password,:firstName,:lastName,:email)
                ';

        $stmt = $conn->prepare($sqlQuery);
        // $stmt->bindValue(':username',$username,':password',$password,':firstName',$firstName,':lastName',$lastName,':email',$email);
        $stmt->execute([
            ':username' => $username,
            ':password' => $password1,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':email' => $email
        ]);
        
        if($stmt) echo"<br><strong>New user was registered!</strong>";
        else echo"<br><strong>New user was NOT registered!</strong>";
    }

    function getUserInfo($username,$email){
        global $conn;
        $sqlQuery = '
                GET * FROM users WHERE userName = :$username AND emailAddress = :$email
            ';
        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute([
            ':username' => $username,
            ':email' => $email
        ]);

        return $stmt;
        
    }


?>