<?php
include('connect.php');
include('login.php');
$string=$_GET['psngr'];
$fare=$_GET['fare'];
$age=$_GET['age'];
$date=$_GET['date'];
$user= $_SESSION["user"];
$sql="INSERT INTO `$user` (passenger,age,date,fare) VALUES  ('$string','$age','$date','$fare')";
if ($conn->query($sql) === TRUE) {

    $query="SELECT `amount` FROM `users` WHERE `username`='$user'";
    $out=$conn->query($query);
    while($row=$out->fetch_assoc()){
        $amount=$row['amount'];
   }
   $amount=$amount-$fare;
 
    $sql="UPDATE `users` SET `amount`=$amount WHERE `username`='$user'";
    if ($conn->query($sql) === TRUE) {
 echo "<h1 style='color:green;text-align:center'>Booked Successfully</h1>";
}    

    }

?>