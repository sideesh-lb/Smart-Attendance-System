<?php

$con=mysqli_connect("localhost","root","","smart");
session_start();
  $uid=$_SESSION['uid'];
 $query1= "select * from `class` where `userid`='$uid'";
 $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result1);
$cid = $row["cid"]; 
$_SESSION['chatid']=$cid;  
 $query2= "select * from `chathistory` where `cid`='$cid' order by `time` ";
  
  $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
  while($rows=mysqli_fetch_assoc($result2))
  { 
    $id=$rows["userid"];
    $query3= "select `username` from `userdetails` where `userid`='$id' ";
    $result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
	 $r=mysqli_fetch_assoc($result3);
	 $uname=$r["username"];
	 $chat=$rows["chatmsg"];
	 $time=$rows["time"];
     
	  if($id==$uid)
	  {
		  echo " <p align='right'><font color=green><b>$uname</b></font> -  $chat - <small><em>$time</em></small></p> ";
		  echo "<hr>";
	  }else
	  {
     echo "<p> <font color=green><b>$uname</b></font> -  $chat - <small><em>$time</em></small></p>";
	   echo "<hr>";
	  }
	
	 
  }



 
 ?>
