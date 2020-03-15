<?php



session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$userid=$_POST['userid'];
$password=$_POST['password'];
$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:student.php');
}


 $query = "SELECT * FROM `userdetails`  where userid ='$userid' ";
$statement = mysqli_query($con,$query) or die(mysqli_error($con));
 
  
  
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['uid'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
       
        header("location:student.php");
      }
      else
      {
       $message = "<label>Wrong Password</label>";
      }
    }
 }
 else
 {
  $message = "<label>Wrong Username</labe>";
 }


?>