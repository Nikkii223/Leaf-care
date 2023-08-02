<?php
include 'function.php';
session_start();
if(!isset($_SESSION['d_email']))
{
  header('Location:index.php');
}
$d_id=$_SESSION["d_id"];



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dr Consult Doctor Admin| Add Blog</title>
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
				<span>Add Blog</span>
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
  	    
        <form action="insert_blog.php" method="post" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Blog Title</label>
              <input type="text" name="blog_title" placeholder="Enter Blog Title" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Blog Photo</label>
              <input type="file" name="blog_image"  required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Blog Description</label>
              <textarea name="blog_desc" placeholder="Enter Blog Description"></textarea>
            </div>
             
             <div class="clearfix"> </div>

        
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary" value="Add Blog" name="add_blog">
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

