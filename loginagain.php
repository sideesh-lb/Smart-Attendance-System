<?php

session_start();
$response = array();
$con=mysqli_connect("localhost","root","","smart");
$uid=$_SESSION['uid'];
$query1="SELECT `hint` FROM userdetails  where userid ='$uid' ";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
$rows=mysqli_fetch_assoc($result1);
$hint = $rows["hint"];
//style="background-color:#

//style="background-color:#90EE90;"
?>


<!DOCTYPE html>
<html>
<head>

<body style="background-color:#CEF0F3 ;" >
<img src="logo.jpg"  width="1500" height="150">
<form   action="login.php"  method="post" >
  <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF       ;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #CEF0F3 ;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #18B8F6 ;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  

}

</style>
<div class="login-page">
  <div class="form">
     <form class="login-form" >
      <p><b> <em>WELCOME</em>
	  </b></p>
        User ID: <input type="text" name="userid"  value="<?php echo $uid; ?>"><br>
  Password: <input type="password" name="password"><br>
        <font>Hint -  <font color="green"><?php echo $hint;?></font></font>	  <br>

      <button name = "logain2">SUBMIT</button>
	   <font color="red"><small>Credentials are incorrect  try again</small></font>
	  
	  <p><small>Dont have account? </small><a href="signup.html"> Signup</a>
    </form>
  </div>
</div>

</form>

</body>

</html>