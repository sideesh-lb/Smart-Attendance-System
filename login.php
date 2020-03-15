<?php
session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$userid=$_POST['userid'];
$password=$_POST['password'];
$query1="SELECT * FROM userdetails  where userid ='$userid' ";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
    $_SESSION['uid']=$_POST['userid'];

while($rows=mysqli_fetch_assoc($result1)) 
{ 

if($password==$rows["password"])
    {  

     $username=$rows["username"];
	 $who=$rows["role"];

   
		  $_SESSION['uname']=$_POST['username'];
   
	 
           if($who=='F')
		   {
			   
			   	header('location:faculty.php'); 
				break;
		   }
            else
			{
					header('location:student.php'); 
					break;
			}
	  
     

    }
	else
	{
		header('location:loginagain.php'); 
	}
	
   

}








?>
