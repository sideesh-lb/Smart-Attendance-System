


<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_POST['userid'];
$query1="SELECT * FROM userdetails  where userid ='$uid' ";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));

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
   
   <h3 align="center"><em><u>ATTENDANCE STATUS </u><em></a></h3><br />
   <br />
   
   
  </div>
  
  
  <?php

$query2="SELECT DISTINCT `courseid`, `course` FROM `attendance` WHERE `userid`='$uid' ";
$result2=mysqli_query($con,$query2) or die(mysqli_error($con));
$row=mysqli_fetch_assoc($result2);

$output = '
<table class="table table-bordered table-striped " >
 <tr>
  <td><b>Course </b></td>
  <td><b>Course id </b></td>
  <td><b>Attendance% </b></td>
   <td></td>
  
 </tr>
';


foreach($result2 as $row)
{
	$temp=$row['course'];
$query3="SELECT count(status),sum(status),`course`,`courseid` FROM `attendance` WHERE `course`='$temp' and `userid`='$uid' ";
$result3=mysqli_query($con,$query3) or die(mysqli_error($con));
$row3=mysqli_fetch_assoc($result3);
	$total=$row3['count(status)'];
	$present=$row3['sum(status)'];
	
	$percent=($present/$total)*100;
	
$output .= '
 <tr>
  <td>'.$row['course'].'</td>
  <td>'.$row['courseid'].'</td>
   <td>'.$percent.'</td>
   <td><button type="button" class=" btn-info btn-xs viewmembers" data-tousername="'.$row3['course'].'"  data-userid="'.$uid.'" data-togid="'.$row3['courseid'].'" >view details</button></td>

 
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
<div id="usermodeldetails"></div>

<p>Warning:The Attendance should be over 75% in all subjects at the end otherwise you are not allowed to write the examination. </p>


<script>

 
 function makedialogbox(touserid, tousername)
 { 
  var model_content = '<div id="userdialog'+touserid+'" class="userdialog" title="'+tousername+' Attendance">';
  model_content += '<div style="height:400px; border:3px solid #A9CCD9 ; overflow-y: scroll; margin-bottom:24px; padding:16px;"   class="chathistory" data-touserid="'+touserid+'" id="chathistory'+touserid+'">';
  model_content += '</div>';
  model_content += '<div class="formgroup" >';
  $('#usermodeldetails').html(model_content);
 }



$(document).on('click', '.viewmembers', function(){
  var touserid = $(this).data('togid');
  var userid = $(this).data('userid');
   var tousername = $(this).data('tousername');
 
  makedialogbox(touserid, tousername);
  $("#userdialog"+touserid).dialog({
   autoOpen:false,
   width:500
  });
   $('#userdialog'+touserid).dialog('open');
 
  updatemembers();
 
 function updatemembers()
 { 
 
  $.ajax({
   url:"facviewdetails.php",
   method:"POST",
    data:{touserid:touserid,userid:userid},
   success:function(data)
   {
    $('#chathistory'+touserid).html(data);
   }
  })
 }
 });
 </script>





















    </body>  
</html>  


