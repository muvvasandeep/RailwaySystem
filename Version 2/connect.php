<?php
$servername = "localhost";
$username = "root";
$password = "7661Urr";
$dbname="trains";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>