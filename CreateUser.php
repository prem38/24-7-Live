<?php
session_start();
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<html>
    <head>
        <title>Register</title>
        <script>
        function validate()
        {
            var username=document.form.username.value;
            var yourname=document.form.yourname.value;
            var email=document.form.email.value;
            var phone=document.form.phone.value;
            var password=document.form.password.value;
            var conpassword=document.form.conpassword.value;
            var img=document.form.img.value; 
            
            if(username==null || username=="")
            {
                alert("UserName Con't Be Empty!");
                return false;
            }
            else if(yourname==null || yourname=="")
            {
                alert("YourName Can't Be Empty!");
               
                    return false;
            } 
                else if(email==null || email=="")
                {
                  alert("Email Can't Be Empty!");
                  return false;
                }
                else if(phone==null || phone=="")
                {
                alert("Mobile_Number Cnt't be Empty!");
                return false;
                } 
                else if(password.length<6)
                {
                    alert("Password Must Be At Least 6 charcter Long!");
                    return false;
                }
                else if(password!=conpassword)
                {
                    alert("Confirm Password Should Not Match With The Password! ");
                    return false;
                }
                else if(img==null || img=="")
                {
                alert("Please Select Image!");
                return false;
                } 
            }
            
        
        </script>
    </head>
    <body>
        <table border="0" bgcolor="#000080" align="top" width="100%" style="height:100x;border-redius:10x">
            <tr>
                <td bgcolor="#000080" align="left" width="150">
                    <img src="pk1.jpg" width="150" height="90" align="right"/>
                </td>
                <td bgcolor="#000080" align="center">
                    <font style="text-align:center;font-family:algerian" color="white" size="+4">24/7 Live</font> 
                </td>
            </tr>  
            
        </table>
        </br>
    <center>
        <fieldset style="width:25%;background-color:#b3d1ff;border:2px;border-redius:10px">
            <h3><center>Registration Application</center></h3>
            <hr>
            <form action="InsertUser.php" name="form" method="post" onsubmit="return validate()">
                <table align="center">
                    <tr>
                        <td><input type="text" name="username" placeholder="User Name"/> 
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="yourname" placeholder="Your Name"/></td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" placeholder="Email_Id"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="phone" placeholder="Mobile_Number"/></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Password"/></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="conpassword" placeholder="Confirm Password"/></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="img" accept="image/x-png,image/x-jpeg,image/x-gif,image/x-jpg"required></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" value="Register"/>&nbsp;<input type="reset" value="Reset"></input></td>
                    </tr>
                </table>
                <div class="cta"><!-- <a href="#">Forgot your password?</a> --><center>Developed by: Prem Kumar &copy 2021</center></div>
               </div>
            </form>
        </fieldset>
    </center>
    
  
 
 
 
 
    
    </body>
</html>
             

