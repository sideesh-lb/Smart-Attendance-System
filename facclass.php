
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
   
   <h3 align="center"><em> <?php echo $name; ?><em></a></h3><br />
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




&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp &nbsp  &nbsp   &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp  
<input type="image" class="zoom messages"  src="messages.png" data-tousername="'.$row3['course'].'"  data-togid="'.$row3['courseid'].'" >

&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp
<input type="image" class="zoom viewmembers"  src="m.png" data-tousername="hello"  >

&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp

<input type="image" class="zoom announcement"  src="ann.png" data-tousername="hello"   >

</p>

<p>

 
&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp   &nbsp &nbsp  &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp &nbsp  &nbsp   &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp  

 <b>Messages</b>
&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp    &nbsp     &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
 <b>People</b>
&nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp     &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp
<b> Announcement</b>
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
 
</p>
<div id="details"></div>
<div id="msg"></div>
	
   </div>
  </div>
  <script>

 
 function makebox(tousername)
 { 
  var modelcontent = '<div id="detail" class="userdialog" title="Members">';
  modelcontent += '<div style="height:600px; border:3px solid green ; overflow-y: scroll; margin-bottom:24px; padding:16px;"   class="chathistory"  id="chat">';
  modelcontent += '</div>';
  modelcontent += '<div class="formgroup" >';
  $('#details').html(modelcontent);
 }



$(document).on('click', '.viewmembers', function(){
   var tousername = $(this).data('tousername');
 
  makebox(tousername);
  $("#detail").dialog({
   autoOpen:false,
   width:500
  });
   $('#detail').dialog('open');
 
  members();
 
 function members()
 { 
 
  $.ajax({
   url:"facviewclass.php",
   success:function(data)
   {
    $('#chat').html(data);
   }
  })
 }
 });
 
 
 
 
  function chatbox()
 { 
  var modal_content = '<div id="chats" class="user_dialog" title="Messages">';
  modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;"   class="chat_history"  id="chat_history">';
  modal_content += '</div>';
  modal_content += '<div class="form-group" >';
  modal_content += '<textarea name="chat_message" id="chat_message" class="form-control"></textarea>';
  modal_content += '</div><div  class="form-group" align="right">';
  modal_content+= '<button type="button" name="send_chat" id="send" class="btn btn-info send_chat">Send</button></div></div>';
  $('#msg').html(modal_content);
 }



$(document).on('click', '.messages', function(){
  
  chatbox();
  $("#chats").dialog({
   autoOpen:false,
   width:500
  });
   $('#chats').dialog('open');

 function cb()
 { 
 
  $.ajax({
   url:"fetch.php",
   success:function(data)
   {
    $('#chat_history').html(data);
   }
  })
 }
 
 
 
 
interval=setInterval(function(){
  cb();
 }, 100);

 });

 
  
 
   $(document).on('click', '.send_chat', function(){
	
 
  var chat_message = $('#chat_message').val();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message').val('');
    $('#chat_history').html(data);
   }
  })
 });
 
 
 
  function annbox()
 { 
  var modal_content = '<div id="ann" class="user_dialog" title="Make Announcement">';
 
  modal_content += '<div class="form-group" >';
  modal_content += '<textarea name="message" id="message" class="form-control"></textarea>';
  modal_content += '</div><div  class="form-group" align="right">';
  modal_content+= '<button type="button" name="send" id="send" class="btn btn-info send">Send</button></div></div>';
  $('#msg').html(modal_content);
 }



$(document).on('click', '.announcement', function(){
  
  annbox();
  $("#ann").dialog({
   autoOpen:false,
   width:500
  });
   $('#ann').dialog('open');

 });
   $(document).on('click', '.send', function(){
	
 
  var message = $('#message').val();
  $.ajax({
   url:"insertnoti.php",
   method:"POST",
   data:{message:message},
   success:function(data)
   {

 alert('Successfuly Announced');

    $('#message').val('');
    $('#ann').dialog('close');
   }
  })
 });
 
 
 
 </script>
    </body>  
</html>  


