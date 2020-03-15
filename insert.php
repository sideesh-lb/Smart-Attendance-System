<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
 $cid=$_SESSION['chatid'];
 $chat_message= $_POST['chat_message'];

$query = "
INSERT INTO `chathistory` 
(`cid`, `userid`, `chatmsg`) 
VALUES ('$cid','$uid','$chat_message')
";

$result2 = mysqli_query($con,$query) or die(mysqli_error($con));
?>