<?php
include('connect.php');
$start=$_GET['start'];
$end=$_GET['end'];
$train=$_GET['train'];
$date=$_GET['date'];
echo "<div style='height:700px;'>";
echo "<div style='height:50px;width:100%'>";
echo "<div style='width:5%;float:left'><button  style='line-height:50px;color:white;width:100%;height:50px;background:red;border:0px;font-size:30px;'onclick=\"document.getElementById('myModal1').style.display='none'\"> <span class='close'>&times;</span></button></div>";
echo "<div style='width:100%;background:linear-gradient(to bottom,#2e3192 0,#2e3192 100%)'><h1 style='line-height:50px;margin:0px;color:white;text-align:center'>Book Ticket</h1></div>";
echo "<div id='success'>";
echo "<div style='height:auto'>";
$sql="SELECT `station_name` FROM `$train` WHERE code='$start'";
$result=$conn->query($sql);
$row_count=mysqli_num_rows($result);
if($row_count==1){
while($row = $result->fetch_assoc())
{
  
$fstart=$row['station_name'];

}}
$sql="SELECT `station_name` FROM `$train` WHERE code='$end'";
$result=$conn->query($sql);
$row_count=mysqli_num_rows($result);
if($row_count==1){
while($row = $result->fetch_assoc())
{
  
$fend=$row['station_name'];

}}

$sql="SELECT `train_name` FROM `train_list` WHERE train_no='$train  '";
$result=$conn->query($sql);
$row_count=mysqli_num_rows($result);
if($row_count==1){
while($row = $result->fetch_assoc())
{
  
$train_name=$row['train_name'];


}}



echo "<table style='width:70%;margin-top:50px;margin:auto'><tbody><tr style='width:100%;'><td style='width:50%;text-align:left'>From: ".$fstart."</td><td style='width:50%;text-align:left'>To: ".$fend."</td></tr><tr style='width:100%;'><td style='width:50%;text-align:left'>Train: ".$train_name ."</td><td style='width:50%;text-align:left'>Date: $date</td></tr></tbody></table>";

echo "</div>";

echo "<div style='width:60%;height:auto;margin:auto'>";
echo "<div style='width:100%'>";
echo "<h2 style='color:#2e3192'>Passenger Details</h2>";
echo "</div>";
echo "<div style='width:100%'>";
echo "<form>";

echo "<table><tbody><tr>";
echo "<td><label>Passenger name: </label><input id='ps1' name='ps1'style='padding:5px;height:25px;font-size:15px'type='text' placeholder='passenger name'></td>";
echo "<td><label>Age: </label><input id='psa1' name='psa1'style='padding:5px;height:25px;font-size:15px' type='number' placeholder='age'></td>";
echo "</tr>";
echo "<tr>";
echo "<td><label>Passenger name: </label><input style='padding:5px;height:25px;font-size:15px' id='ps2'name='ps2'type='text' placeholder='passenger name'></td>";
echo "<td><label>Age: </label><input style='padding:5px;height:25px;font-size:15px' id='psa2' name='psa2'type='number' placeholder='age'></td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Passenger name: </label><input style='padding:5px;height:25px;font-size:15px' id='ps3' name='ps3' type='text' placeholder='passenger name'></td>";
echo "<td><label>Age: </label><input style='padding:5px;height:25px;font-size:15px' id='psa3' name='psa3' type='number' placeholder='age'></td>";
echo "</tr>";

echo "</tbody></table>";

echo "</form>";

echo "<button onclick=\"book_ticket('$train','$start','$end')\" style='height:25px;width:20%;font-size:20px;margin-left:40%;margin-top:10px;background:#2e3192;color:white;border:0px;'>Book Tickets</button>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";










?>







