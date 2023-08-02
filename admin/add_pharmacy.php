<?php
include 'function.php';
session_start();
if(!isset($_SESSION['a_email']))
{
  header('Location:index.php');
}

if (isset($_POST['add_pharmacy'])) {

$pharmacy_name=$_POST['pharmacy_name'];
$pharmacy_number=$_POST['pharmacy_number'];
$location=$_POST['location'];
$pharmacy_email=$_POST['pharmacy_email'];
$pharmacy_pwd=$_POST['pharmacy_pwd'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$pharmacy_city=$_POST['pharmacy_city'];
$pharmacy_status=$_POST['pharmacy_status'];

add_pharmacy($pharmacy_name,$pharmacy_number,$location,$pharmacy_email,$pharmacy_pwd,$start_time,$end_time,$pharmacy_city,$pharmacy_status);

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dr Consult | Add Pharmacy</title>
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
				<span>Add Pharmacy</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
    <h5 style="text-align: center;color: red;">
 		<?php
    if(isset($_GET['msg']))
    {
      echo $_GET['msg'];
    }
    ?>
  </h5>
 		<div class="validation-form">
 	<!---->
  	    
        <form action="#" method="post">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Pharmacy Name</label>
              <input type="text" name="pharmacy_name" placeholder="Enter Pharmacy Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Pharmacy Phone</label>
              <input type="number" name="pharmacy_number" placeholder="Enter Pharmacy Phone Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea name="location" placeholder="Enter Pharmacy Address"></textarea>
            </div>
             
             <div class="clearfix"> </div>

             <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Pharmacy Email </label>
              <input type="email" name="pharmacy_email" placeholder="Enter Pharmacy Email" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Pharmacy Password</label>
              <input type="password" name="pharmacy_pwd" placeholder="Enter Pharmacy Longitude" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Starting  Hours:- </label>
              <input type="time" name="start_time" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Ending Hours:- </label>
              <input type="time" name="end_time" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Pharmacy City</label>
              <input type="text" name="pharmacy_city" placeholder="Enter Pharmacy City" required="">
            </div>
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Pharmacy Status</label>
                <select name="pharmacy_status">
              <option value="1">Show</option>
              <option value="0">Hide</option>
              
            </select>
            </div>
            <div class="clearfix"> </div>
            </div>
             
           
          
          
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary" value="Add Pharmacy" name="add_pharmacy">
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
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

