<?php

session_start();

$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
  
 $query1= "select `branch`,`section` from `class` where  `userid`='$uid'  ";
  $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
  $row=mysqli_fetch_assoc($result1);
  $branch=$row["branch"];
  $section=$row["section"];
  $query2= "select * from `class` where  `userid`!='$uid' and  `branch`='$branch' and  `section`='$section'  ORDER BY `role`";
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
  while($rows=mysqli_fetch_assoc($result2))
  { 
    $name=$rows["username"];
	$id=$rows["userid"];
	$status=$rows["role"];
	$power=$rows["power"];
	
	if($status=='S')
	{
		$s="Student";
		 echo " <font ><b>$name</b></font> -  <font ><b>$id</b></font>  -  <font color=green><em><b>$s</b></em></font> .";
		 echo "<hr>";
	}
	else if($power==1)
	{
		$s="Coordinator";
		  echo " <font ><b>$name</b></font> -  <font ><b>$id</b></font>  -  <font color=red><em><b>$s</b></em></font> .";
		 echo "<hr>";
	}
	else
	{
		$s="Faculty";
		  echo " <font ><b>$name</b></font> -  <font ><b>$id</b></font>  -  <font color=blue><em><b>$s</b></em></font> .";
		 echo "<hr>";
	}
    
	 echo "<br> ";
  }



 
 ?>
