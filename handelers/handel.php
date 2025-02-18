<?php
session_start();
include("../core/request.php");
include("../core/Validations.php");
include("../core/session.php");
$errors = [];
if (postMethod()){

    foreach($_POST as $key => $value){
        $$key = reciveInput($value);
    }
    if (requiredInput($name)){
        $errors[] = "name required";

    }elseif(minInput($name,4)){
        $errors [] = "name is must be greater than 4";
    }elseif(maxInput($name,50)){
        $errors [] = "name is must be less than 50";
    
    }
    if(requiredInput($email)){

        $errors [] = "email required";

    }elseif(emailInput($email)) {
        $errors [] = "Please Type a valid email";
    }

    if (requiredInput($password)){
        $errors[] = "password required";

    }elseif(minInput($password,6)){
        $errors [] = "password is must be greater than 4";
    }elseif(maxInput($password,25)){
        $errors [] = "password is must be less than 25";
    
    }

    if (requiredInput($confirm_password)){
        $errors[] = "confirm password required";
    }elseif(sameInput($password, $confirm_password)){

    $errors[] = "confirm password must be same password";
    }

    if(empty($errors)){
        $user = [
            'name' => $name,
            'email'=> $email
        ];
    sessionStore('user', $user);
        header('location:../profile.php');
    }else{
            sessionstore("errors", $errors);
            header('location:../register.php');        }
    
    }else { 

        echo "Not Allowed Method";}
