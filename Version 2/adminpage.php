<!DOCTYPE html>
<?php
include('login.php');
?>

<head>

<style>

input[type=submit]:hover{
    cursor:pointer;
}
button:active{
    height:33px;
}
</style>
<script>


function erase(){

    var str=document.getElementById('remove').value;
    querystring='number='+str;


 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("view").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "remove-train.php?"+ querystring, true);
xmlhttp.send();
return false;
}


function addtrain()
{
var tname = document.getElementById('tname').value;
console.log(tname);
var tno = document.getElementById('tno').value;
console.log(tno);
var sname=document.getElementById('sname').value;
var station = document.getElementById('station').value;
console.log(station);
var arr = document.getElementById('arr').value;
var dep = document.getElementById('dep').value;
var fare = document.getElementById('fare').value;
var seats = document.getElementById('seats').value;
var querystring='tname='+ tname+'&tno='+tno +'&sname='+sname+'&station='+station+'&arr='+arr+'&dep='+dep+'&fare='+fare+'&seats='+seats;
console.log(querystring);
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("view").innerHTML = this.responseText;
        console.log(this.responseText);
    }
};
xmlhttp.open("GET", "addtrain.php?"+ querystring, true);
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
              <div style='width:10%;float:left;height:100px'>
                     <a href='logout.php' style='line-height:100px;text-decoration:none'><button style='border:0px;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;font-size:20px'>Logout</button></a>
              </div>
         </div>

          <div style='width:50%;height:800px; float:left'>
         
                <div style="width:100%;float:left;height:80px;margin-left:15%">
                    <h2 style="text-align:left;margin-bottom:5px;font-size:35px;color: #2e3192;font-family:'Times New Roman', Times, serif">Add new train</h2>
                </div>
                    
                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left"> 
                    <input id='tname' name='train_name' type="text" placeholder="train name" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>

                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input id='tno' name="train_no" type="number" placeholder="train number"  style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>
                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left"> 
                    <input id='sname' name='station_name' type="text" placeholder="station names" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>

                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input id='station' name="stations" type="text"  placeholder="station codes"   style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>

                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input id='arr' name="arrival" type="text"  placeholder="arr times"  style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>

                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input id='dep' name="departure" type="text"  placeholder="dep times" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>
               
                <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                    <input id='fare' name="fare" type="text"  placeholder="fares" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                </div>

                <div style="width:100%;height:50px;padding:1% 15% 5% 20%;float:left">  
                    <button onclick="addtrain()" style="width:20%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:35px;font-size:18px">Add train</button>
                </div>
          
            </div>
        
            <div style='width:50%;height:400px; float:left'>
                <div style="width:100%;float:left;height:80px;margin-left:15%">
                            <h2 style="text-align:left;margin-bottom:5px;font-size:35px;color: #2e3192;font-family:'Times New Roman', Times, serif">Remove  train</h2>
                </div>
                <div style="width:50%;height:50px;padding:1% 10% 1% 20%;float:left">  
                            <input id='remove'name="train_no" type="number" placeholder="train number"  style="width:55%;padding:5px;height:25px;font-size:15px" required>
                            <button onclick="erase()" style="width:33%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:40px;font-size:16px">Remove</button>
                </div>
                  <div id='view' style="width:50%;height:50px;padding:1% 10% 1% 20%;float:left">  
                  </div>
             </div>

</body>

</html>