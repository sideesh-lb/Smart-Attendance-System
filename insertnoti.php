<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
 $msg=$_POST['message'];
 
 
  $query1= "select * from `class` where  `userid`='$uid'  ";
  $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
  $row=mysqli_fetch_assoc($result1);
  $cid=$row["cid"];
  
 

$query = "
INSERT INTO `notification` 
(`cid`,`message`) 
VALUES ('$cid','$msg')
";

$result2 = mysqli_query($con,$query) or die(mysqli_error($con));
?>