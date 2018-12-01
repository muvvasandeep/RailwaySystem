<?php
include('connect.php');
$start=$_GET['start'];
$end=$_GET['end'];
$j=0;
if($start===$end){
  echo "<p style='font-size:20px;color:red'>From station and To station are same.</p>";
}else{
$sql="SELECT $start.train_no FROM `$start`,`$end` WHERE $start.train_no=$end.train_no";
$result = $conn->query($sql);
$row_count=mysqli_num_rows($result);
$j=0;
while($row=mysqli_fetch_assoc($result)){

$train[$j]=$row["train_no"];
$j++;

}
$lenght=count($train);
echo "<table style='width:70%;margin-left:30px;'><thead><tr><th style='color:#2e3192'>Train Name</th><th style='color:#2e3192'>Train Number</th><th style='color:#2e3192'>Fare</th><th style='color:#2e3192' >Plan journey</th></tr></thead><tbody>";
for($i=0;$i<$lenght;$i++){
$qry="SELECT * FROM `$train[$i]` WHERE code='$start' AND id<(SELECT id FROM `$train[$i]` WHERE code='$end')";
 

  $out = $conn->query($qry);
$count=mysqli_num_rows($out);
echo $count;
if($count!=0){


  $sql="SELECT `fare` FROM `$train[$i]` WHERE code='$end'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){
      $high=$row['fare'];
    
  }
  $sql="SELECT `fare` FROM `$train[$i]` WHERE code='$start'";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){
      $low=$row['fare'];
    
  }

$fare[$j]=$high-$low;



    $sql="SELECT `train_name` FROM `train_list` WHERE train_no='$train[$i]'";
    $result = $conn->query($sql);
    while($row=mysqli_fetch_assoc($result)){
      $train_name=$row['train_name'];

     
    }

  echo "<tr><td onclick='list($train[$i]);view()'><a href='#'>".$train_name."</a></td><td>".$train[$i]."</td><td>Rs $fare[$j]</td><td onclick=\"vieww();book($train[$i],'$start','$end')\"><a href='#'>Book ticket</a></td></tr>";
  $j++;
}
}
echo "</tbody></table>";
}
?>
