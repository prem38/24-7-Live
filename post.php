<?php
include 'session.php';
if(isset($_SESSION['yourname'])){
    $text=$_POST['text'];
    
    $text_message="<div class='msgln'><spn class='chat_time'>".date("g:i A")."</spn><b class='user_name'>".$_SESSION['yourname']."</b>".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("log.html", $text_message,FILE_APPEND | LOCK_EX);
}
        
?>
<?php
$sql="select * from user where userid='$loggedin_id'";
$query= mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
$username=$row['username'];
$yourname=$row['yourname'];

                 $ms = $_POST['mess'];
                    date_default_timezone_set('Asia/Kolkata');
                    $ts = date('d-m-y h:ia');

                    $sql="insert into chat(userid,msg,created_on)values('$username','$ms','$ts')";
                    if(mysqli_query($con, $sql)){
                                 echo "<script>window.location.href='chat.php?registered'</script>";

                    }
                    else{ echo 'Data Counld Not Be Send';}
                    ?>