<?php
include 'function.php';
session_start();
if(!isset($_SESSION['a_email']))
{
  header('Location:index.php');
}
if(!isset($_GET['v_h_id']))
{
header('Location:hospital_list.php');
}
$h_id=$_GET['v_h_id'];
$hospital_list=hospital_list_by_id($h_id);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dr Consult |  Clinic Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
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



</head>
<body>
<div id="wrapper">
      <!----->
       <?php  include 'header_sidebar.php';;?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i> Hospital Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="<?php echo $hospital_list['h_pic'];?>" width="100%" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6><?php echo $hospital_list['h_name'];?></h6>
				<table>
				<tr><td>Contact</td>  
				<td>:</td>  
				<td><?php echo $hospital_list['h_contact'];?></td></tr>
				
				<tr>
				<td>Address</td>
				<td> :</td>
				<td><?php echo $hospital_list['h_address'];?></td>
				</tr>
				<tr>
				<td>Email</td>
				<td> :</td>
				<td> <?php echo $hospital_list['h_email'];?></td>
				</tr>
				<!-- <tr>
				<td>Country </td>
				<td>:</td>
				<td> United Arab Emirates</td>
				</tr> -->
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4><?php echo $hospital_list['city'];?></h4>
				
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>City</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4><?php echo $hospital_list['state'];?></h4>
				<a href="#" class="pro1"><i class="fa fa-user"></i>State</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4><?php if($hospital_list['h_status']=='1')
				{
					echo "Show";

				} 
				else
				{
					echo "Hide";
				}
				
				?></h4>
				<a href="#"><i class="fa fa-cog"></i>Hospital Status</a>
			</div>
			<div class="clearfix"></div>
			</div>
			<!-- <div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
			</div> -->
			 
			
		</div>
	</div>
	<!--//gallery-->
		<!---->
<?php include 'footer.php';?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

</body>
</html>



