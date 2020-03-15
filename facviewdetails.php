<?php

session_start();

$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_POST['userid'];
  
  $to_user_id  = $_POST['touserid'];
 $query2= "select * from `attendance` where `courseid`='$to_user_id' and `userid`='$uid'  ORDER BY `date` DESC";
  
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
  while($rows=mysqli_fetch_assoc($result2))
  { 
    $cname=$rows["course"];
	$date=$rows["date"];
	$status=$rows["status"];
	
	if($status==1)
	{
		$s="present";
		 echo " <font color=blue><b>$cname</b></font> -  <font color=green><b>$s</b></font>  -  <small><em>$date</em></small> ";
		 echo "<hr>";
	}
	else
	{
		$s="absent";
		 echo " <font color=blue><b>$cname</b></font> -  <font color=red><b>$s</b></font>  -  <small><em>$date</em></small> ";
		 echo "<hr>";
	}
    
	 echo "<br> ";
  }



 
 ?>
