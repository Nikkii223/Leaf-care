<?php
include 'function.php';
session_start();
if(!isset($_SESSION['p_email']))
{
  header('Location:index.php');
}
$pha_id=$_SESSION["pha_id"];


if (isset($_POST['add_medicine'])) {
$medicine_name=$_POST['medicine_name'];
$medicine_price=$_POST['medicine_price'];
$medicine_potency=$_POST['medicine_potency'];
$medicine_date=$_POST['medicine_date'];
$medicine_desc=$_POST['medicine_desc'];

add_medicine($medicine_name,$medicine_price,$medicine_potency,$medicine_date,$medicine_desc,$pha_id);

}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dr Consult Doctor Admin| Add Medicine</title>
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
				<span>Add Medicine</span>
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
  	    
        <form action="#" method="post" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Medicine Name</label>
              <input type="text" name="medicine_name" placeholder="Enter Medicine Name" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Medicine Price</label>
              <input type="number" name="medicine_price"  required="" placeholder="Enter Medicine Price">
            </div>
            <div class="clearfix"> </div>
            </div>

            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Medicine Potency</label>
              <input type="text" name="medicine_potency" placeholder="Enter Medicine Potency" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Medicine Expirey Date</label>
              <input type="date" name="medicine_date"  required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Medicine Description</label>
              <textarea name="medicine_desc" placeholder="Enter Medicine Description"></textarea>
            </div>
             
             <div class="clearfix"> </div>

        
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary" value="Add Medicine" name="add_medicine">
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

