
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include('connect.php');
$str=$_GET['string'];
    // Prepare a select statement
    $length=strlen($str);
   
    if($length>1){
    $sql = "SELECT `code` FROM stations WHERE code LIKE '$str'";
  
    $result = $conn->query($sql);
    $row_count=mysqli_num_rows($result);
   
    if($row_count > 0){
    while($row = $result->fetch_assoc())
    {
              
                    echo "<p onclick=\"document.getElementById('start').value=this.innerHTML\">" . $row["code"] . "</p>";
                }
            }
             else{
                echo "<p>No matches found</p><br>";
            }

        }
?>