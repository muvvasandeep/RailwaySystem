
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
        <div style="width:35%;float:left;margin-left:10%;height:500px ">
                
                    
                <div style="float:left;margin:0px 30px 30px 30px;width:100%;height:500px;border:1px solid grey;">
                    <form method="POST" action="login.php">

                        <div style="width:100%;float:left;height:50px;margin-left:15%">
                            <h2 style="text-align:left;font-size:35px;color:#2e3192;font-family:'Times New Roman', Times, serif">Login</h2>
                        </div>
                              
                        <div style="width:100%;height:50px;padding:10% 15% 1% 20%;float:left"> 
                             <input name='username' type="text" placeholder="Enter Username" required style="width:40%;padding:5px;height:25px;font-size:15px">
                        </div>

                        <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="passkey" type="password" placeholder="Password"  required style="width:40%;padding:5px;height:25px;font-size:15px">
                        </div>

                        <div style="width:100%;height:50px;padding:1% 15% 5% 20%;float:left">  
                            <input type="submit" name="login" value="Login"  style="width:20%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:35px;font-size:18px">
                        </div>

                    </form>
                </div>
        </div>
        <div style="width:35%;margin-left:5%;float:left;height:500px ">
                <div style="float:left;margin:0 30px 30px 30px;width:100%;height:500px;border:1px solid grey;">
                    
                    <form method="POST" action="login.php">

                        <div style="width:100%;float:left;height:50px;margin-left:15%">
                            <h2 style="text-align:left;font-size:35px;color: #2e3192;font-family:'Times New Roman', Times, serif">Register</h2>
                        </div>
                            
                        <div style="width:100%;height:50px;padding:10% 15% 1% 20%;float:left"> 
                            <input name='username' type="text" placeholder="Username" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                        </div>

                        <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="passkey" type="password" placeholder="Your Password"  style="width:40%;padding:5px;height:25px;font-size:15px" required>
                        </div>
        
                            <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="aadhar" type="text" placeholder="Aadhar number"   pattern="\d*"style="width:40%;padding:5px;height:25px;font-size:15px" maxlength="12" minlength="12" required>
                            </div>

                        <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="Bank" type="text" placeholder="Bank A/c Number"  pattern="\d*" style="width:40%;padding:5px;height:25px;font-size:15px" maxlength="11" minlength="11" required>
                           </div>

                        <div style="width:100%;height:50px;padding:1% 15% 1% 20%;float:left">  
                            <input name="Amount" type="number" placeholder="Initial Amount in A/c" step="0.01" style="width:40%;padding:5px;height:25px;font-size:15px" required>
                            </div>

                            <div style="width:100%;height:50px;padding:1% 15% 5% 20%;float:left">  
                            <input type="submit"  name="register"value="Register"  style="width:20%;padding:5px;background: linear-gradient(to bottom,#2e3192 0,#2e3192 100%);color:white;height:35px;font-size:18px">
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>