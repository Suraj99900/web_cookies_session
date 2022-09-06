<?php
require 'config/session.php';
//get registration data

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //validate input value
    if (!$firstname) {
        $_SESSION['reg'] = "Please enter your First name";
    } elseif (!$lastname) {
        $_SESSION['reg'] = "please enetr your Last name";
    } elseif (!$email) {
        $_SESSION['reg'] = "please enetr your Email";
    } elseif (!$password) {
        $_SESSION['reg'] = "Enter your password ";
    } elseif (strlen($password) < 8) {
        $_SESSION['reg'] = "password should be 8+ charecters";
    }

    if (isset($_SESSION['reg'])) {
        //pass the form data back to the registration 
        $_SESSION['reg-data'] = $_POST;
        header('location:index.php');
        die();
    } else {
        //insert data to cookie

        
        setcookie("firstname", $firstname, time() + (86400 * 30), "/");
        setcookie("lastname", $lastname, time() + (86400 * 30), "/");
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");

        
            $_SESSION['reg-success'] = "Registration successful.please log in";
            header("location:login.php");
            die();
        
    }
}
else {
    //if button wasn't clicked ,bounce back to registration page
    $_SESSION['reg'] = "some problem there ";
    header('location:index.php');
    die();
}
