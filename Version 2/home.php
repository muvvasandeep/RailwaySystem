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
button:hover{
    cursor:pointer;
}
a:hover{
    cursor:pointer;
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
.result{
        position: relative;        
        z-index: 999;
        top: 50;
        left: 0;
        background:rgb(200,200,200);
        height:auto;
    }
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    label{
        font-size:20px;
    }
</style>
 
 


<script>
function retrive(){
    
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("list").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "retreive.php", true);
xmlhttp.send();
return false;
}   


function active(){
if(  document.activeElement.id!='start'){
    document.getElementById('result').style.display='none';
}
else{
    document.getElementById('result').style.display='block';
}
if(  document.activeElement.id!='end'){
    document.getElementById('resultt').style.display='none';
}

else{
    document.getElementById('resultt').style.display='block';
}
}
function view() {
    var modal = document.getElementById('myModal');
    modal.style.display = "block";
}
function vieww() {
    var modal = document.getElementById('myModal1');
    modal.style.display = "block";
}
function search()
{
    var start=document.getElementById('start').value;
var end=document.getElementById('end').value;
var date=document.getElementById('date').value;
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

function book_final(x,y,z){
    var date=document.getElementById('date').value;
    query="psngr="+x+"&age="+y+"&fare="+z+"&date="+date;
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("success").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "update.php?" + query, true);
xmlhttp.send();
return false;
}


function book_ticket(x,y,z){

var ps1=document.getElementById("ps1").value;
var ps2=document.getElementById("ps2").value;
 var ps3=document.getElementById("ps3").value;
 var psa1=document.getElementById("psa1").value;
var psa2=document.getElementById("psa2").value;
 var psa3=document.getElementById("psa3").value;
var query="ps1="+ps1+"&ps2="+ps2+"&ps3="+ps3+"&psa1="+psa1+"&psa2="+psa2+"&psa3="+psa3+"&train="+x+"&start="+y+"&end="+z;
console.log(query);
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
        document.getElementById("success").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "bookticket.php?" +query, true);
xmlhttp.send();
return false;
}



function livesearch()
{
   var str=document.getElementById("start").value;
var querystring="string="+str+'%';
console.log(querystring);
 var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("result").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "backend-search.php?" +querystring, true);
xmlhttp.send();
return false;
}
function livesearcht()
{
   var str=document.getElementById("end").value;
var querystring="string="+str+'%';
console.log(querystring);
 var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("resultt").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "backend-searcht.php?" +querystring, true);
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
function book(x,y,z){
    var date=document.getElementById('date').value;

var train='train='+x+'&start='+y+'&end='+z+'&date='+date;
console.log(train);
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("modal1").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "book.php?" + train, true);
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
        <a href="#" onclick="retrive()" style="text-decoration:none; color:white;font-size:20px"> My Bookings</a>
        </li>
        <li>

            <a href="logout.php" target="_self" style="text-decoration:none; color:white;font-size:20px">Log out</a>
        </li>
</ul>
</div>
   
    <div id ="page" style="width:25%;margin-left:5%;margin-top:70px;float:left;height:350px">       

        <div onclick="active()" style="float:left;width:100%;height:350px;border:1px solid grey;">
                <div style="width:85%;float:left;height:50px;margin-left:15%">
                    <h2 style="text-align:left;font-size:35px;color:#2e3192;font-family:'Times New Roman', Times, serif">Search trains</h2>
                </div>
                        
                <div style="width:65%;height:50px;padding:10% 15% 1% 20%;float:left"> 
                        <input name='start' id='start' type="text" onkeyup = "livesearch()" required placeholder="From" style="width:80%;padding:5px;height:25px;font-size:15px">
                        <div class='result' id="result"></div>
                </div>

                <div style="width:65%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input name="end" id='end' type="text"  onkeyup = "livesearcht()" placeholder="To"  required style="width:80%;padding:5px;height:25px;font-size:15px">
                    <div class='result' id="resultt"></div>
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

<div id="myModal1" class="modal">

<!-- Modal content -->
<div class='modal-content' style="padding:0px">
   <div id='modal1'></div>
</div>

</div>
</body>
</html>