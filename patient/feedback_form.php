<?php
include 'function.php';
session_start();
if(!isset($_SESSION['p_email']))
{
  header('Location:index.php');
}
if(isset($_POST['p_feedback']))
{
	$p_id=$_SESSION['p_id'];
	$exap=$_POST['experience'];
	$recommend=$_POST['recommend'];
	update_feedback($p_id,$exap,$recommend);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Doctor Consult Patient | Feedback Form</title>
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
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
     <!----->
              <?php include 'header_sidebar.php';?>


		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Feedback Form</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Your Feedback</h3>
 		<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Your Experience..</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Experience..." name="experience" required="">
  </div>
  <div class="form-group">
  										<label for="radio" class="col-sm-4 control-label">Do You recommend to Others?</label>

    <div class="col-sm-4">
										
										<div class="radio-inline"><label><input type="radio" checked="" name="recommend" value="Yes"> Yes</label></div>
										<div class="radio-inline"><label><input type="radio" name="recommend"  value="No"> No</label></div>
										
									</div>
  </div>
  <div class="clearfix"></div>
   <input type="submit" name="p_feedback" value="Post Feedback"  class="btn btn-default">
  <!-- <button type="submit" class="btn btn-default">Submit</button> -->
</form>
</div>

		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
<!---->

</body>
</html>

