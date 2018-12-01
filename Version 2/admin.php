<!DOCTYPE html>
<html>
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body style="margin:0px">

<div style="width:100%;height:auto">
    <div style="background:linear-gradient(to bottom,#2e3192 0,#2e3192 100%);height:100px; width:100%;float:left">
        <h1 style="font-size:50px;margin:0px;line-height:100px;text-align:center;color:white;font-family:'Times New Roman', Times, serif">Ticket Booking System</h1>
    </div>
    <div style="margin-top:30px;float:left;width:100%">
        <div style="width:100%;float:left;margin-top:100px;height:300px ">
                
                    
                <div style="float:left;margin-left:30%;width:40%;height:300px;border:1px solid grey;">
                    <form method="POST" action="login.php">

                        <div style="width:100%;float:left;height:50px;margin-left:15%">
                            <h2 style="text-align:left;font-size:35px;color:#2e3192;font-family:'Times New Roman', Times, serif">Login as admin</h2>
                        </div>
                              
                        <div style="width:100%;height:50px;padding:10% 15% 1% 20%;float:left"> 
                             <input name='username' type="text" placeholder="Enter Username" required style="width:40%;padding:5px;height:25px;font-size:15px">
                        </div>

                        <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="passkey" type="password" placeholder="Password"  required style="width:40%;padding:5px;height:25px;font-size:15px">
                        </div>

                        <div style="width:100%;height:50px;padding:1% 15% 5% 20%;float:left">  
                            <input type="submit" name="admin" value="login"  style="width:20%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:35px;font-size:18px">
                        </div>

                    </form>
                </div>
        </div>
    </div>
</div>

</body>
</html>

