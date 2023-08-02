<?php
include "../configuration.php";
$last_queries =  "SELECT * FROM remedies ORDER BY Rem_Id DESC LIMIT 2";
	$sub_desc_res = mysqli_query($con,$last_queries);
$d_countQ = "SELECT * FROM registerdoctor";
	$p_countQ = "SELECT * FROM registerpatient";
	$phar_countQ = "SELECT * FROM pharmacy";

	$d_res = mysqli_query($con,$d_countQ);
	$p_res = mysqli_query($con,$p_countQ);
	$phar_res = mysqli_query($con,$phar_countQ);

	$d_count = mysqli_num_rows($d_res);
	$p_count = mysqli_num_rows($p_res);
	$phar_count = mysqli_num_rows($phar_res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dr Consult | Home Page</title>
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- bootstrapCDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<!-- font awesome-bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<!-- my css-StyleSheet -->
	<link rel="stylesheet" type="text/css" href="..\css\homepage.css">

	<!-- jquery link-->
	<script src="https://code.jquery.com/jquery.min.js"></script>

	<!-- bootstrap-JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.ocean {
        height: 5%;
        width: 100%;
    }
    .footer_top {
        /*margin: 0px;*/
        padding-top:25px;
    }
    .test-background-color {
        background-color: rgba(0, 0, 0, 0.6);
    }

    .card {
        /*border-radius: 40px;*/
        border: 0px;
        /*word-spacing: 10px;*/
        text-align: justify;
        line-height: 30px;
        font-size: 20px;
        color: black;
        background: none;

    }
    .active1{
    	color:black!important;
    	border-bottom: 2px solid #0cb8b6;
    }
    .navbar{
        border: 0px;
      }

    .card-borders {
        border-radius: 4%;
        background: #d3d2d0;
        opacity: 0.6;
    }
    .wave {
        background: url(../resources/wave.svg) repeat-x;
        width: 6400px;
        /*width: 100%;*/
        height: auto;
        overflow-x: hidden;
        overflow-y: hidden;
        animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
        transform: translate3d(0, 0, 0);
    }

    .wave:nth-of-type(2) {
        margin-top: -150px;
        /*BEST CASE SO FAR*/
        /*animation: wave 8.6s cubic-bezier( 0.46, 0.35, 0.43, 0.53) -.125s infinite, swell_2  7s ease -1.25s infinite;*/
        animation: wave 9s cubic-bezier(0.46, 0.60, 0.43, 0.53) -.125s infinite, swell_2 7s ease -1.25s infinite;
        opacity: 1;
        height: 140px;
    }

    .wave:nth-of-type(1) {
        z-index: 1;
        height: 180px;
        opacity: 0.7;
        animation: swell_1 5s ease -1.25s reverse infinite, wave 13s cubic-bezier(0.36, 0.45, 0.63, 0.53) -.125s infinite
    }

    @keyframes wave {
        0% {
            margin-left: 0;
        }

        100% {
            margin-left: -1600px;
        }
    }

    @keyframes swell_2 {

        0%,
        100% {
            transform: translate3d(0, 10px, 0);
        }

        50% {
            transform: translate3d(0, 20px, 0);
        }
    }

    @keyframes swell_1 {

        0%,
        100% {
            transform: translate3d(0px, 10px, 0);
        }

        50% {
            transform: translate3d(0px, 25px, 0);
        }

	</style>
	
</head>
<body>
<div class="container-fluid">
    <!-- Second navbar for categories -->
	    <!-- Second navbar for sign in -->
	   <?php include 'header.php';?>
	</div><!-- /.container-fluid -->
	
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	  <!-- Overlay -->
	  <div class="overlay"></div>

	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#bs-carousel" data-slide-to="1"></li>
	    <li data-target="#bs-carousel" data-slide-to="2"></li>
	  </ol>
	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item slides active">
	      <div class="slide-1"></div>
	      <div class="hero">
	        <hgroup>
	            <h1>The Greatest Evil Is Physical Pain. </h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-2"></div>
	      <div class="hero">        
	        <hgroup>
	            <h1>Every Disease Is A Physician</h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>       
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	    <div class="item slides">
	      <div class="slide-3"></div>
	      <div class="hero">        
	        <hgroup>
	            <h1>Treat The Patient, Not The XRAY</h1>        
	            <!-- <h3>Get start your next awesome project</h3> -->
	        </hgroup>
	        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
	      </div>
	    </div>
	  </div> 
	</div>


<div class="our_services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="services_wrapper">
					
					<h2>
						Services: We Offer
					</h2>
<!-- Row#1 For Services Wrapper -->
					<div class="row">
						
						
						<div class="col-12 col-md-6">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->

	                                <h3>Find A Clinic</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Want to know about your near-by clinics? Just a click away! All the available clinics can now be viewed in minimum time.
	                            	</p>
	                            </div>
                            </div>
						</div>
						
						<div class="col-12 col-md-6 ">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->
	                                <h3>Find A Disease</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.
	                            	</p>
	                            </div>
                            </div>
						</div>
					</div>

<!-- Row#2 for services wrapper -->
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="services_content">
							<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
                                <!-- <img src="images/cardiogram.png" alt=""> -->

                                <h3>Pharmacy</h3>
                            </header>
                            <div class="inner_content">
                            	<p>
                            		Looking for some medicine? Click here! And get your medicines delivered at your doorsteps by contacting pharmacists.
                            	</p>
                            </div>


                            </div>
						</div>
						
						<div class="col-12 col-md-6">
							<div class="services_content">
								<header class="entry-header d-flex flex-wrap align-items-center __web-inspector-hide-shortcut__">
	                                <!-- <img src="images/cardiogram.png" alt=""> -->

	                                <h3>Hospital</h3>
	                            </header>
	                            <div class="inner_content">
	                            	<p>
	                            		Want to get information about your near-by hospital? Click here! And find the hospital according to your location.
	                            	</p>
	                            </div>
                            </div>
						</div>
						
						
					</div>
				</div>
			</div>			
		</div>
	</div>	
</div>




<!-- Paralllllaaaaaaaaaaaaaaaaaaaaaaaaaaax -->


<div class="parallax">
	<div class="emergency_cases">
		<div class="container">
			<div class="emergency_container_cases_top">
				<div class="col-md-6 emergency_cases_left">
					<h4>Opening Hours</h4>
					<h6>Monday - Fri&nbsp;<span class="floating">8.00 - 18.00</span></h6>
					<h6>Monday - Sat&nbsp;<span class="floating">9.00 - 17.00</span></h6>
					<h6>Monday - Sun&nbsp;<span class="floating">9.00 - 15.00</span></h6>
				</div>
				<div class="col-md-6 col-sm-12 emergency_cases_right">
					<h4>Emergency Cases</h4>
					<h5><i class="fa fa-phone" aria-hidden="true"></i>1230456789</h5>
					<p>In Case of Emergence Contact on above Phone#</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>



<div class="stats-counter">
	<div class="container">
		<div class="title-stats-counter">
			<h3 class="stats-title-styling white-text">
				<span class="black">O</span>ur
				<span class="black">S</span>tats
			</h3>
		
			<div class="stats-line">
				<span class="fa fa-wheelchair" style="font-size: 2em;" aria-hidden="true"></span>
			</div>
		</div>
	</div>
	<div>
		<div class="container">
			<div class="col-md-4 col-sm-4 stats-grid">
				<div class="stats-numscroller"><?php echo "$d_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Doctors</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts col-sm-6 stats-grid stats-grid-1">
				<div class="stats-numscroller"><?php echo "$p_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Patients</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
				<div class="stats-numscroller"><?php echo "$phar_count"; ?></div>
				<div class="stat-info-w3ls">
					<h4 class="stats-grid">Pharmacies</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			</div>

	</div>



</div>
<br>
<br>
<br>
<br>

<div class="container-fluid test-background-color">
<br>
        	<div style="font-size: 40px; color: #ff9900;">Remedies</div>
<br>
<br>
<br>
        <div class="container">
            <div class="row">
    <?php            while ( $row = mysqli_fetch_array($sub_desc_res)) {
		
	
echo
				"<div class='card-borders col-sm-5 box-shadow' style='color: black;'>
                    <h3><b>".$row["Subject"]."</b></h3>
                    <p class='card ' style='color: black;font-size: 20px;'>".$row['Description']."
                    </p>
                </div>
                <div class='col-sm-2'></div>";}?>
                <!-- <div class="card-borders col-sm-5 box-shadow" style="color: black;">
                    <h3><b>HOW WE DO IT?</b></h3>
                    <p class="card "style="color: black; font-size: 20px;">We understand that no journey is ever a straight path. It will be full of ups and downs, twists and turns, and times when you don’t know which direction to take.We go on that journey with our clients 
                    </p>
                </div>
            </div> -->
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
<br>
            <br>
            <br>
            <br>

</div>

<!-- footer -->
<?php include 'new_footer.php';?>