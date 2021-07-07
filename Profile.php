<?php

include 'session.php';


$sql="select * from user where userid='$loggedin_id'";
$query= mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
$username=$row['username'];
$yourname=$row['yourname'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];
$image=$row['img'];
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body><table border="0" bgcolor="#000080" align="top" width="100%" style="height:100x;border-redius:10x">
            <tr>
                <td bgcolor="#000080" align="left" width="150">
                    <img src="image/pk1.jpg" width="150" height="90" align="right"/>
                </td>
                <td bgcolor="#000080" align="center">
                    <font style="text-align:center;font-family:algerian" color="white" size="+4">24/7 Live</font> 
                </td>
                <td>
                 
 
                    <a style="text-decoration:none;color:white;" href="home.php"><img style="width: 30%;height: 50%"src="image/p8.png"/></br>Home</a>
                </td>
                <td>
                    
                    <a style="text-decoration:none;color:white;" href="chat.php"><img style="width: 30%;height: 50%"src="image/p18.png"/></br>Chat</a>
                </td>
                
                
                
            </tr>
           
        </table>
        </br>
        <center>
        <fieldset style="width:25%;background-color:#b3d1ff;border:2px;border-redius:10px">
            <h3><center>Your Profile</center></h3>
            <hr>
        <table align="center">
           
            <tr>
                <td colspan="2"><h3>Welcome,<font color="blue"><?php echo $yourname;?></font></h3></td>
            </tr>
            <tr>
                <td>
                    <?php
                    
                    
                    ?>
                    
                    
                    
                </td>
            </tr>
            
            <tr>
                <td>UserName</td><td><input type="text" value="<?php echo $username; ?>" disabled/></td>
            </tr>
            <tr>
                <td>YourName</td><td><input type="text" value="<?php echo $yourname; ?>" disabled/></td>
            </tr>
            <tr>
                <td>Email</td><td><input type="text" value="<?php echo $email; ?>" disabled/></td>
            </tr>
            <tr>
                <td>Mobile</td><td><input type="text" value="<?php echo $phone; ?>" disabled/></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="text" value="<?php echo $password; ?>" disabled/></td>
            </tr>
            <tr>
                <td><a style="text-decoration:none"href="Logout.php" onclick="return confirm logout();"><h4>Logout</h4></a></td>
                <td><a style="text-decoration:none"href="EditDetails.php?userid=<?php echo $loggedin_id; ?>"><h4>Edit Profile</h4></a></td>
            </tr>
            
        </table> 
        </fieldset>
        </center>
    </body>
</html>

