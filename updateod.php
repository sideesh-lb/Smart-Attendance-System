<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
$userid= $_POST['userid'];
$from= $_POST['from'];
$status= $_POST['status'];
$coid= $_POST['coid'];

$query = "
UPDATE `od` SET `status`=$status  WHERE `coid`='$coid' and `userid`='$userid' and `from` ='$from';";

$result2 = mysqli_query($con,$query) or die(mysqli_error($con));
?>