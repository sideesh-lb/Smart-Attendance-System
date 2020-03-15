
<?php

$con=mysqli_connect("localhost","root","","smart");

session_start();

  
 $userid=$_POST['userid'];
 $name=$_POST['name'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];
 $hint=$_POST['hint'];
 $email=$_POST['email'];
 
 
 $word = "STU";
   $role;
 
if(strpos($userid, $word) !== false){
    $role='S';
} else{
     $role='F';
}

$query = "
INSERT INTO `userdetails` (`userid`, `username`, `password`, `role`, `hint`, `emailid`) VALUES ('$userid', ' $name', '$password', '$role', '$hint', ' $email');
";

$result = mysqli_query($con,$query) or die(mysqli_error($con));


 







?>

  <!DOCTYPE html>
<html>
<head>
   <img src="logo.jpg"  width="1600" height="150">
<body >


<p><em>Successfully registered you can  <a name = "log1" href="login.html">login</a> now</em></p>

</body>

</html>
