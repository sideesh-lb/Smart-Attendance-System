
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
  
  
  
  <div id="usermodeldetails"></div>
  
  <script>
function fuser()
 { 
 
  $.ajax({
   url:"facfetchod.php",
   method:"POST",
   success:function(data)
   {
	$('#usermodeldetails').html(data);
   }
  })
 }
 
 
  setInterval(function(){
  fuser();
 }, 500);



 $(document).on('click', '.approve', function(){
   var from = $(this).data('from');
   var status = $(this).data('status');
   var userid = $(this).data('userid');
   var coid = $(this).data('coid');
 
 

  updateod();
 
 function updateod()
 { 
 
  $.ajax({
   url:"updateod.php",
   method:"POST",
    data:{from:from,status:status,userid:userid,coid:coid},
   success:function(data)
   {
   
   }
  })
 }
 });
 
 
  $(document).on('click', '.deny', function(){
   var from = $(this).data('from');
   var status = $(this).data('status');
   var userid = $(this).data('userid');
   var coid = $(this).data('coid');
 
 

  updateod();
 
 function updateod()
 { 
 
  $.ajax({
   url:"updateod.php",
   method:"POST",
    data:{from:from,status:status,userid:userid,coid:coid},
   success:function(data)
   {
   
   }
  })
 }
 });

 </script>
 

    </body>  
</html>  


