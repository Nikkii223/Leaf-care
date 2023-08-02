<?php
include 'function.php';

session_start();
if(isset($_POST['plogin']))
{
  $email=$_POST['user_email'];
   $pwd=$_POST['user_pwd'];
  patient_login($email,$pwd);
}

if(isset($_SESSION['p_email']))
{
  header('Location:dashboard.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Doctor Consult </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.php">Doctor Consult </a></h1>
		<div class="login-bottom">
			<h2>Patient Login</h2>

				<h5 style="color: red;text-align: center;">
					<?php
					if(isset($_GET['msg']))
					{
					echo $_GET['msg'];	
					}
					?>
				</h5>
			<form action="#" method="post">
			<div class="col-md-12">
				<div class="login-mail">
					<input type="text" placeholder="Email" name="user_email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="user_pwd" required="">
					<i class="fa fa-lock"></i>
				</div>
				<div class="login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="plogin">
					</label>
			</div>

			
			</div>
			
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2020 Doctor Consult. All Rights Reserved | Design by <a href="" target="_blank">Doctor Consult</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

