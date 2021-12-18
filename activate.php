<?php
$account=$_GET['account'];
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");session_start();
$updt="UPDATE userver SET status=1 WHERE username='$account'   ";
$insq=mysqli_query($con,$updt);
     $name=$get2['name'];	  
    $_SESSION['loginname']=$username;
    $_SESSION['name']=$name;
 $_SESSION['id']=$get2['id'];header("Location:index.php"); 

?>