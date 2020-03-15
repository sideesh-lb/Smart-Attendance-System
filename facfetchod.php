
<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];

//style="background-color:#

//style="background-color:#90EE90;"


$query2="SELECT * FROM `od` WHERE `coid`='$uid'  and `status`=0";
$result2=mysqli_query($con,$query2) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result2);
$id = $row["userid"];


$query1="SELECT * FROM `userdetails`  where userid ='$id' ";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$rows=mysqli_fetch_assoc($result1);
$name = $rows["username"];


$output = '
<table class="table table-bordered table-striped " >
 <tr>
  <td><b>Name </b></td>
  <td><b>Roll Number </b></td>
  <td><b>From</b></td>
  <td><b>Till</b></td>
    <td><b>Reason</b></td>
  <td><b>Leave type</b></td>
   <td></td>
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

$output .= '
 <tr>
  <td>'.$name.'</td>
  <td>'.$row['userid'].'</td>
  <td>'.$row['from'].'</td>
  <td>'.$row['till'].'</td>
  <td>'.$row['reason'].'</td>
  <td>'.$type.'</td> 
  <td><button style="background-color:green" type="button" class="btn-xs approve" data-coid="'.$row['coid'].'" data-status=1 data-from="'.$row['from'].'" data-userid="'.$row['userid'].'"  ><font color=white>Approve</font></button></td>
  <td><button style="background-color:red" type="button" class="btn-xs deny"  data-coid="'.$row['coid'].'" data-status=2 data-from="'.$row['from'].'" data-userid="'.$row['userid'].'"><font color=white>Deny</font></button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>


 
