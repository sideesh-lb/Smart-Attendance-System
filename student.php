


<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
$query1="SELECT * FROM userdetails  where userid ='$uid' ";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$rows=mysqli_fetch_assoc($result1);
$name = $rows["username"];
//style="background-color:#

//style="background-color:#90EE90;"
?>
<html>  
    <head>  
        <title>SMART ATTENDANCE SYSTEM </title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
	 
	
	<body style="background-color:#CEF0F3 ;" >
	<img src="logo.jpg"  width="1600" height="150">
        <div class="container">
   <br />
   
   <h3 align="center"><em><u>Welcome  <?php echo $name; ?></u><em></a></h3><br />
   <br />
   <br >
   <div class="table-responsive">
    

<style>
.zoom {
  padding:25px;
 
  transition: transform .25s;
  width: 175px;
  height: 175px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1); /* IE 9 */
  -webkit-transform: scale(1); /* Safari 3-8 */
  transform: scale(1.4); 
}

</style>

<p>
&nbsp &nbsp  
<a href="attendance.php">
<img name = "att" border="0" alt="W3Schools" src="ad.jpg"  class="zoom" >
</a>



&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  
 <a href="class.php">
<img name = "cl" border="0" alt="W3Schools" src="cls.png"   class="zoom" >
</a>


&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  
 <a href="odpage.html">
<img name = "medi" border="0" alt="W3Schools" src="medi.png"   class="zoom" >
</a>

&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  
 <a href="settings.php">
<img name = "sett" border="0" alt="W3Schools" src="setting.png"   class="zoom" >
</a>

&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 
 <a href="logout.php">
<img name = "lout" border="0" alt="W3Schools" src="off.png"    class="zoom" >
</a>

&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp
 
</p>

<p>
&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp
<b>Attendance</b>

&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp    &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
 <b>My class</b>
 
 &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp    &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
 <b>Medical leave/OD</b>
&nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp    &nbsp     &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
 <b>Settings</b>
&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp    &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp
 <b>Logout</b>
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
 
</p>
	
   </div>
  </div>
    </body>  
</html>  


