<?php
include 'function.php';
session_start();
if(!isset($_SESSION['p_email']))
{
  header('Location:index.php');
}
if(!isset($_GET['d_id']))
{
	header('Location:book_appoinment.php');
}
$d_id=$_GET['d_id'];
$doctor_list=doctor_list_by_id($d_id);
if(isset($_POST['b_appionment']))
{
	$p_id=$_SESSION['p_id'];
	$ap_date=$_POST['ap_date'];
	$d_id=$_POST['d_id'];
	book_appionment($p_id,$ap_date,$d_id);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Doctor Consult Patient | Book Appionment</title>
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
				<span>Appionment Form</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		 <h5 style="text-align: center;color: red;">
 		<?php
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    }
    ?>
  </h5>
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Book Your Appionment</h3>
 		<form action="" method="post">
  <div class="form-group">
  	<input type="hidden" name="d_id" value="<?php echo $d_id;?>">
    <label for="exampleInputEmail1">Appointment Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Appointment Date..." name="ap_date" required="">
  </div>
  <div class="form-group">
  	<label for="exampleInputEmail1">Dcotor  Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $doctor_list['D_Gender'].$doctor_list['D_Fname'].$doctor_list['D_Lname'];?>
" required="" disabled>
  </div>


  <div class="clearfix"></div>
   <input type="submit" name="b_appionment" value="Book Now"  class="btn btn-default">
  <!-- <button type="submit" class="btn btn-default">Submit</button> -->
</form>
</div>

		<!---->
<?php include 'footer.php';?>
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

