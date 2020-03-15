<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];

//style="background-color:#

//style="background-color:#90EE90;"
?>
<html>  
    <head>  
        <title>Leave list </title>  
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
   
   <h3 align="center"><em><u>Leave List </u><em></a></h3><br />
   <br />
   
   
  </div>
  
  
  <?php

$query2="SELECT `from`,`till`,`reason`,`type`,`status` FROM `od` WHERE `userid`='$uid' ";
$result2=mysqli_query($con,$query2) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result2);

$output = '
<table class="table table-bordered table-striped " >
 <tr>
  <td><b>From </b></td>
  <td><b>Till </b></td>
  <td><b>Reason </b></td>
  <td><b>Leave type </b></td>
  <td><b>Status </b></td>
   <td></td>
  
 </tr>
';


foreach($result2 as $row)
{
$t=$row['type'];

if($t==0)
{
	$type="Other duty";
}else
{
	$type="Medical Leave";
}


$s=$row['status'];

if($s==0)
{
	$status="Waiting";
}else if($s==1)
{
	$status="Approved";
}else
{
	$status="Denied";
}

	
$output .= '
 <tr>
  <td>'.$row['from'].'</td>
  <td>'.$row['till'].'</td>
  <td>'.$row['reason'].'</td>
  <td>'.$type.'</td>
  <td><b><u>'.$status.'</u></b></td>
 
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>

    </body>  
</html>  


