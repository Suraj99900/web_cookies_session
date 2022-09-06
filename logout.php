<?php
require 'config/session.php'; 
//destroy the session
setcookie("firstname", "",-1,"/");
setcookie("lastname", "",-1,"/");
setcookie("email", "",-1,"/");
setcookie("password", "",-1,"/");
session_destroy();

header('location:login.php');
die();
