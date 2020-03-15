<?php

session_start();

$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
  
  $np  = $_POST['np'];
 $query2= "UPDATE `userdetails` SET `password`='$np' WHERE `userid`='$uid'";
  
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));





 
 ?>
 
  <!DOCTYPE html>
<html>
<head>
   
<body style="background-color:#CEF0F3 ";>
<img src="logo.jpg"  width="1600" height="150">

 
<p><em>Successfully changed and logged out . you can  <a name = "logag" href="login.html">login</a> now</em></p>

</body>

</html>
