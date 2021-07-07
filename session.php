<?php
include('Database.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select username,userid from user where username='$user_check'");
$row=mysqli_fetch_array($ses_sql);
$loggedin_session=$row['username'];
$loggedin_id=$row['userid'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: Login.php");
}
?>