<?php   
include("login.php");
session_destroy();
header("location:main.php"); 
exit();
?>