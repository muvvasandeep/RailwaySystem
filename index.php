<?php


if($_SESSION["user"]==""){
    header('location:main.php');
}
else{
    header('location:home.php');
}

?>
