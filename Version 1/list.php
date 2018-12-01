<?php

include('connect.php');
$train=$_GET['train'];

$sql="SELECT * FROM train_ticket.$train";

$result=$conn->query($sql);;
echo "<table style='width:70%;margin-left:30px'><thead><tr><th>S.No</th><th>Code</th><th>Station_name</th><th>Arr</th><th>Dep</th></tr></thead><tbody>";
while($row=mysqli_fetch_assoc($result)){
   // echo $row['id'];

  echo "<tr><td>".$row["id"]."</td><td>".$row["Code"]."</td><td>".$row["station_name"]."</td><td>".$row["Arr"]."</td><td>".$row["Dep"]."</td></tr>";


}
?>