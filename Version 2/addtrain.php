<?php

include('connect.php');
$tno=$_GET['tno'];
$tname=$_GET['tname'];
echo $tname;
$sql="create table `$tno` (id int not null auto_increment primary key,code varchar(5) not null unique,station_name varchar(50) not null,Arr varchar(10) not null,Dep varchar(10) not null,fare int not null)";
if ($conn->query($sql) === TRUE) {
  
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  $sql="INSERT INTO `train_list` (`train_name`,train_no) VALUES ('$tname','$tno')";
  if ($conn->query($sql) === TRUE) {
  
      }
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
$station=explode(',',$_GET['station']);
$arrive=explode(',',$_GET['arr']);
$depart=explode(',',$_GET['dep']);
$fare=explode(',',$_GET['fare']);
$stn_name=explode(',',$_GET['sname']);
$length=count($fare);
for($i=0;$i<$length;$i++){
    $sql="INSERT INTO `$tno`(`code`,`station_name`,`Arr`,`Dep`,`fare`) VALUES('$station[$i]','$stn_name[$i]','$arrive[$i]','$depart[$i]','$fare[$i]')";
    if ($conn->query($sql) === TRUE) {
       
         }
          else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }
}
for($k=0;$k<$length;$k++){
  $sql="SELECT $station[$k] FROM `stations`";
  $row_count=mysqli_num_rows($result);
  if($row_count==0){
    $sql="CREATE TABLE `$station[$k]` (train_no int(5) not null primary key)";
    if ($conn->query($sql) === TRUE) {
      
       }

      $sql="INSERT INTO stations (station_name,code) VALUES ('$stn_name[$k]','$station[$k]')";
      if ($conn->query($sql) === TRUE) {
      
   }
   else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
}
for($j=0;$j<$length;$j++){


  $sql="INSERT INTO `$station[$j]` (`train_no`) VALUES('$tno')";
  if ($conn->query($sql) === TRUE) {
   
     }
      else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
}
















//$station=explode(',',$_GET['station']);
//echo $station[0];
//$length=count($station);
//echo $length;
//for($i=0;$i<$length;$i++){

 //$sql="INSERT INTO `$tno` (`code`) VALUES ('$station[$i]')";
 
// if ($conn->query($sql) === TRUE) {
  //   echo "New record created successfully";
    //  }
      // else {
      //  echo "Error: " . $sql . "<br>" . $conn->error;
    //}
//}
//$arrive=explode(',',$_GET['arr']);

//$length=count($arrive);
//echo $length;
//for($i=0;$i<$length;$i++){

 //$sql="INSERT INTO `$tno` (`Arr`) VALUES ('$arrive[$i]')";
 
 //if ($conn->query($sql) === TRUE) {
   //  echo "New record created successfully";
     // }
       //else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    //}
//}
?>