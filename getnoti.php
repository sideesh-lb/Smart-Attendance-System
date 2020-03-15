<?php

session_start();

$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
    
	
	
$query3= "select * from `class` where `userid`='$uid'";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result3);
$cid=$row["cid"];
 
 $query2= "select * from `notification` where `cid`='$cid'  ORDER BY `date` DESC";
  
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
  while($rows=mysqli_fetch_assoc($result2))
  { 
    $s=$rows["message"];
	$date=$rows["date"];
		 echo "<font color=green ><b>$s</b></font>  -  <small><em>$date</em></small> ";
		 echo "<hr>";
	 echo "<br> ";
  }

$query4="SELECT DISTINCT `courseid`, `course` FROM `attendance` WHERE `userid`='$uid' ";
$result4=mysqli_query($con,$query4) or die(mysqli_error($con));
$rowdy=mysqli_fetch_assoc($result4);



foreach($result4 as $rowdy)
{
	$temp=$rowdy['course'];
$query5="SELECT count(status),sum(status),`course`,`courseid` FROM `attendance` WHERE `course`='$temp' and `userid`='$uid' ";
$result5=mysqli_query($con,$query5) or die(mysqli_error($con));
$row5=mysqli_fetch_assoc($result5);
	$total=$row5['count(status)'];
	$present=$row5['sum(status)'];
	$course=$row5['course'];
	$percent=($present/$total)*100;
	
if($percent<75)
{
	echo "<font color=red><em>You have only $percent% attendance in $course .<em></font>";
	echo "<hr>";
	 echo "<br> ";
}
}


 
 ?>
