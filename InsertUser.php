<?php
session_start();
include'Database.php';


$username=$_POST['username'];
       
$result=mysqli_query($con,"select * from user where username='$username'");
$row= mysqli_num_rows($result);
if($row)
    {
     echo"<script>window.alert('This User Name Is Allready Register!')</script>";
     echo "<script>window.location.href='CreateUser.php?Registeagain!'</script>";

   }

else{
    $username=$_POST['username'];
    $yourname=$_POST['yourname'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    $conpassword=$_POST['conpassword'];
    $img=$_POST['img'];
    


mysqli_query($con,"insert into user(username,yourname,email,phone,password,conpassword,img)values('$username','$yourname','$email','$mobile','$password','$conpassword','$img')")or die(mysqli_error($con));
       
  
            echo"<script>window.alert('Account Successfully created!You can Login With Your credentials.')</script>";
             //header('Location:Login.php');
             echo "<script>window.location.href='Login.php?registered'</script>";
        
    
}


        


?>