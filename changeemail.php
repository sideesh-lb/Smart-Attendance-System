<?php

session_start();

$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
  
  $ne  = $_POST['ne'];
 $query2= "UPDATE `userdetails` SET `emailid`='$ne' WHERE `userid`='$uid'";
  
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));





 
 ?>
 
  <!DOCTYPE html>
<html>
<head>
 
<body style="background-color:#CEF0F3 ";>

 <img src="logo.jpg"  width="1600" height="150">

<p><em>Successfully you email got changed .</em></p>

</body>

</html>
