<?php
require 'config/session.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!isset($_COOKIE['email']) and !isset($_COOKIE['password'])) {
        $_SESSION['login'] = "There is no data in cookie || REGISTER YOUR SELF";
    } elseif (!$email) {
        $_SESSION['login'] = "Please Enter your Email";
    } elseif (!$password) {
        $_SESSION['login'] = "Please Enter your password";
    } else {

        if ($email == $_COOKIE['email']) {
            if ($password == $_COOKIE['password']) {
                header("location:home.php");
                $_SESSION['login-user'] = true;
                die();
            } else {
                $_SESSION['login'] = "Please enater valid password";
            }
        } else {
            $_SESSION['login'] = "Please enater valid email";
        }
    }


    if(isset($_SESSION['login'])) {
        $_SESSION['login-data'] = $_POST;
        header('location:login.php');
        die();
    }
} else {
    header('location:login.php');
    die();
}
