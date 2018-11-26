<!DOCTYPE html>
<html>
<?php 

include("login.php");

if($_SESSION['user']==""){
    header('location:main.php');
}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
td{
    text-align:center;
    font-size:20px;
    padding:10px;
}
li:active{
    background-color:#2e3192;
}

ul{
    list-style-type:none;
    margin:0px;
}
li{
    float:left;
    width:20%;
    padding-top:5px;    
    height:35px;
    font-size:20px;
    }
    li:hover{
        cursor:pointer;
    }
th{
    text-align:center;
    font-size:25px;
    padding:10px;
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.modal{
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>
<script>
function view() {
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
}
function search()
{
    var start=document.getElementById('start').value;
var end=document.getElementById('end').value;
var date=document.getElementById('date').value;


console.log(date);
querystring='start='+ start+'&end='+end +'&date='+date;
console.log(querystring);
 var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("list").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "search.php?" + querystring, true);
xmlhttp.send();
return false;
}

function list(str){
var train='train='+str;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("modal").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "list.php?" + train, true);
xmlhttp.send();
return false;    
}



</script>

</head>
<body style="margin:0px">
        <div style="color:white;border-bottom:1px solid white;height:100px;width:100%;float:left;background:linear-gradient(to bottom,#2e3192 0,#2e3192 100%)">
             <div style="width:30%;margin-left:5%;margin-right:5%;float:left;">
                 <h2 style="font-size:30px;text-align:left;line-height:100px;margin:0px;">Welcome <?php echo $_SESSION["user"];?></h2>
             </div>
             <div style="width:50%;float:left">
                 <h1 style="font-size:50px;line-height:100px;margin:0px;text-align:left">Ticket Booking system</h1>
              </div>
        
          </div>
  
<div style="color:white;height:50px;margin:0px;width:100%;float:left;background:linear-gradient(to bottom,#2e3192 0,#2e3192 100%)">
    <ul>
        
        <li style="margin-left:20%">
            My Account
        </li>
        <li>
            My Bookings
        </li>
        <li>

            <a href="logout.php" target="_self"style="text-decoration:none; color:white;font-size:20px">Log out</a>
        </li>
</ul>
</div>
   
    <div id ="page"style="width:25%;margin-left:5%;margin-top:70px;float:left;height:350px">       

        <div style="float:left;width:100%;height:350px;border:1px solid grey;">
                <div style="width:85%;float:left;height:50px;margin-left:15%">
                    <h2 style="text-align:left;font-size:35px;color:#2e3192;font-family:'Times New Roman', Times, serif">Search trains</h2>
                </div>
                        
                <div style="width:65%;height:50px;padding:10% 15% 1% 20%;float:left"> 
                        <input name='start' id='start' type="text" placeholder="From" required style="width:80%;padding:5px;height:25px;font-size:15px">
                </div>

                <div style="width:65%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input name="end" id='end' type="text" placeholder="To"  required style="width:80%;padding:5px;height:25px;font-size:15px">
                </div>
                <div style="width:65%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input name="date" id='date' type="date" required style="width:80%;padding:5px;height:25px;font-size:15px">
                </div>

                <div style="width:65%;height:50px;padding:1% 15% 5% 20%;float:left">  
                    <input type="submit" onclick="search()" id='search' value="search"  style="width:40%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:35px;font-size:18px">
                </div>

          
        </div>
     </div>
<div id=list style="width:65%;margin-left:5%;margin-top:50px;height:700px;overflow-y:scroll;float:left">


</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <button  onclick="document.getElementById('myModal').style.display='none'"> <span class="close">&times;</span></button>
     <div id='modal'></div>
  </div>

</div>
</body>
<html>