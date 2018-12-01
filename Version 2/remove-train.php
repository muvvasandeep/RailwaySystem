<?php
include('connect.php');
$tno=$_GET['number'];
$i=0;
$sql="DELETE FROM `train_list` WHERE train_no='$tno'";
if ($conn->query($sql) === TRUE) {
    echo "Deleted";
    }
     else {
    echo "Error: " . $sql . "<br>" . $conn->error;
     }
echo $tno;

$qry="SELECT `code` FROM `$tno`";
$out=$conn->query($qry);
while($row=mysqli_fetch_assoc($out)){
$stn_list[$i]=$row['code'];
echo $stn_list[$i];
$i++;
}
$length=count($stn_list);
for($j=0;$j<$length;$j++){
   $query="DELETE FROM `$stn_list[$j]` WHERE train_no='$tno'";
    if ($conn->query($query) === TRUE) {
     echo "Deleted successfully";
          }
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
}

$drop="DROP TABLE `$tno`";
if ($conn->query($drop) === TRUE) {
    echo "Deleted successfully";
         }
         else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }
?>