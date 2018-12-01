<?php

include('connect.php');
include('login.php');
$user=$_SESSION["user"];
$sql="SELECT * FROM `$user`";
$result=$conn->query($sql);
echo "<table style='width:100%'><thead><th>passengers</th><th>age</th><th>date</th><th>fare</th></head><tbody>";
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row['passenger']."</td><td>".$row['age']."</td><td>".$row['date']."</td><td>".$row['fare']."</td><td><button onclick=\"cancel(".$row['passenger'].",".$row['age'].",".$row['date'].",".$row['fare'].")\"> Cancel</button></td></tr>";

}
echo "<tbody></table>";
?> 