<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");


$uid=$_SESSION['uid'];
 $type= $_POST['type'];
 $from= $_POST['from'];
 $till= $_POST['till'];
  $reason= $_POST['reason'];

 $query1= "select `userid` from `class` where `cid`=(select `cid` from `class` where `userid`='$uid') and `power`=1";
 $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result1);
$coid = $row["userid"]; 


$query = "
INSERT INTO `od`(`userid`, `from`, `till`, `type`, `reason`,`coid`) 
VALUES ('$uid','$from','$till',$type,'$reason','$coid')
";

$result2 = mysqli_query($con,$query) or die(mysqli_error($con));
?>

  <!DOCTYPE html>
<html>
<head>
   <img src="logo.jpg"  width="1600" height="150">
<body >


<p><em>Successfully Applied  </p>

</body>

</html>