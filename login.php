<?php
include("connect.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['login'])){
       
        $user=$_POST["username"];
        $pass=$_POST["passkey"];
       
        $sql = "SELECT * FROM train_ticket.user WHERE username = '$user' and passkey = '$pass'";
        $result = $conn->query($sql);
        $row_count=mysqli_num_rows($result);
        if($row_count==1){
        while($row = $result->fetch_assoc())
        {
          
         $_SESSION["user"]=$user;
         
        header("location:home.php");

        }}
        else{
            echo "<p style='font-size:25px'>wrong credentials. <a href='index.php' target='_self'>click here</a> to retry</p>";
        }
    }
  if(isset($_POST['register'])){
 $user=$_POST["username"];
 $pass=$_POST["passkey"];
 $aadhar=$_POST["aadhar"];
 $account=$_POST["Bank"];
 $amount=$_POST["Amount"];
  $sql = "INSERT INTO train_ticket.user (`username`, `passkey`, `aadhar`, `bankacct`, `amount`) VALUES ('$user', '$pass', '$aadhar', '$account', '$amount')";

 if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
    }
  }
?>