 
<?php
session_start();
include_once 'Database.php';


$username=$_POST['username'];
$password=$_POST['password'];
 $sql="select * from user where username='$username' and password='$password'";
 $result= mysqli_query($con, $sql);
 $row= mysqli_num_rows($result);
 if($row<1)
 {
     echo "<script>window.alert('Login Error. Please try again!')</script>";
     echo "<script>window.location.href='Login.php?Attapt=Fails'</script>";
 }
 else {
 
     $row= mysqli_num_rows($result);
     $_SESSION['userid']=$row['userid'];
     $_SESSION['login_user']=$username;
     header('location:Home.php');
 }
 
 /**$result = mysqli_query($con,"SELECT * FROM createuser");
 $rows = mysqli_num_rows($result);
 if ($rows!=$mobile) {
  header("location: Login.php?remark_login=failed");
 }
 $sql="SELECT email FROM createuser WHERE Mobile_Number='$mobile' and Password='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$mobile;
  header("location:Profile.php");
 }*/

?>