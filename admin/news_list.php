<?php
include 'function.php';
session_start();
if(!isset($_SESSION['a_email']))
{
  header('Location:index.php');
}

$news_list=news_list();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Doctor Consult Admin | News List</title>
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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>News List</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	
<h4 style="color: red;text-align: center;"><?php if(isset($_GET['msg']))
{
	echo $_GET['msg'];
}
?></h4>
			<div class="blank-page">
				<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">News Title</th>
      <th scope="col">News Description</th>
      <th scope="col">News Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  	<?php
  	$i=1;
  	while ($row=$news_list->fetch_assoc()) {
  		
  	
  	?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $row['new_title'];?></td>
      <td><?php echo $row['NewsLetter'];?></td>
      <td><?php echo $row['new_date'];?></td>
      
      <td><a href="common.php?d_News_Id=<?php echo $row['News_Id'];?>"> Delete</a> </td>
    </tr>
   <?php
   $i++;
   }
   ?>
  </tbody>
</table>
	        	
	        </div>
	       </div>
	
	<!--//faq-->
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

