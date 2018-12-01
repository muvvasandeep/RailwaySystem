<?php
$servername = "servername";
$username = "username";
$password = "password";
$dbname="train_ticket";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>