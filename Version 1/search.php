<?php
include('connect.php');
$sql="SELECT * FROM train_ticket.trains";
$result=$conn->query($sql);
$row_count=mysqli_num_rows($result);
$diff=0;
//echo 'hi';
//echo $row_count;  

//echo $_GET['date'];
echo "<table style='width:70%;margin-left:30px;'><thead><tr><th>Train name</th><th>Train number</th></tr></thead><tbody>";
while($row=mysqli_fetch_assoc($result)){
   // echo $row['id'];

  echo "<tr><td><a href='#' onclick='list(".$row["train_no"].");view()'>".$row["train_name"]."</a></td><td>".$row["train_no"]."</td></tr>";


}

//if($diff<0){
//echo "17488";
//}
//else{
  //  echo "hello";
//}
echo "</tbody></table>";


?>
