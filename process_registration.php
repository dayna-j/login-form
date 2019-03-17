<?php 

session_start();
include_once('./db.php');
include_once('./registration_functions.php');

$validRegistration = true;
// print_r($_POST);

if(empty( $_POST['register'] )) exit('Form was not submitted.  How did you even get here??');

foreach($_POST as $key => $value) {
    if(!empty($value)){
        $_POST["$key"] = trim($value);
    } else {
        echo "<strong>$key must have a value!</strong>";
        $validRegistration = false;
    }
}

extract($_POST);
// $firstName, $lastName, $email, $username, $password1, $password2, $register

// if the registration is not valid, exit the execution of the script
if(!validateUsernameSyntax($username)) exit("<strong>Not a valid username!</strong>");
else if(doesUserExist($username)) exit("<strong>An account with this username already exists!</strong>");
else if(doesEmailExist($email)) exit("<strong>An account with this email address already exists!</strong>");
else if(!passwordsMatch($password1,$password2)) exit("<strong>Passwords do not match!</strong>");
else if(!validatePasswordSyntax($password1,$password2)) exit("<strong>Not a valid password!</strong>");
else if(!validateFirstNameSyntax($firstName)) exit("<strong>Invalid first name! Must be 40 characters or less and contain only alpabetical characters!</strong>");
else if(!validateLastNameSyntax($lastName)) exit("<strong>Invalid last name! Must be 40 characters or less and contain only alpabetical characters!</strong>");

else registerUser($username,$password1,$email,$firstName,$lastName);
// else if(passwordsMatch($password1,$password2) && validatePasswordSyntax($password1,$password2) )



// check whether username already exists in database
// check whether an account has already been registered with the given email address
// verify whether passwords match and conform to password constraints




?>