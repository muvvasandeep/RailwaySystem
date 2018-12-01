<?php

include('connect.php');
$ps1=$_GET['ps1'];
$ps2=$_GET['ps2'];
$ps3=$_GET['ps3'];
$psa1=$_GET['psa1'];
$psa2=$_GET['psa2'];
$psa3=$_GET['psa3'];
$train=$_GET['train'];
$start=$_GET['start'];
$end=$_GET['end'];

$str="";
$age="";
$i=0;
if($ps1!="" && $psa1!=""){
    $i=$i+1;
    $str=$ps1.",".$str;
    $age=$psa1.",".$age;
}
if($ps2!="" && $psa2!=""){
    $i=$i+1;
    $str=$ps2.",".$str;
    $age=$psa2.",".$age;
}
if($ps3!="" && $psa3!=""){
    $i=$i+1;
    $str=$ps3.",".$str;
    $age=$psa3.",".$age;
}

if($i==0){
    echo '<h1 style="text-align:center">No details entered</h1>';
}


$seats=$i;
$sql="SELECT `fare` FROM `$train` WHERE code='$end'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $high=$row['fare'];
   
}
$sql="SELECT `fare` FROM `$train` WHERE code='$start'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $low=$row['fare'];
  
}
$fare=$high-$low;
$fare =$i*$fare;
echo "<h2 style='text-align:center'>Do you Want to pay Rs $fare and book your tickets?</h2>";
echo "<button onclick=\"book_final('$str','$age','$fare')\" style='height:25px;width:20%;font-size:20px;margin-left:40%;margin-top:10px;background:#2e3192;color:white;border:0px;'>Book Tickets</button>";

?>