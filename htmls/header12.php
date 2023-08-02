 <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><img src="..\resources\logo.jpg" width="60px" height="50px"></a>

	        </div>
	    
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="navbar-collapse-2">
	        	
	        	
	        	
	        	<?php

 if(isset($_SESSION['login_user'])){
    echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='index.php?Docid=".$Docid."'>Home</a></li>
	            	<li><a href='services.php?Docid=".$Docid."'>Services</a></li>
	            	<li><a href='Team.php?Docid=".$Docid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?Docid=".$Docid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?Docid=".$Docid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='DocDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else if(isset($_SESSION['login_pharmacy'])){
     echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='index.php?pharid=".$Pharid."'>Home</a></li>
	            	<li><a href='services.php?pharid=".$Pharid."'>Services</a></li>
	            	<li><a href='Team.php?pharid=".$Pharid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?pharid=".$Pharid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?pharid=".$Pharid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='PharDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else if(isset($_SESSION['login_patient'])){
   echo "		
    <ul class='nav navbar-nav navbar-left'>
	            	<li><a class=' active1' href='index.php?Patid=".$Patid."'>Home</a></li>
	            	<li><a href='services.php?Patid=".$Patid."'>Services</a></li>
	            	<li><a href='Team.php?Patid=".$Patid."'>Our Team</a></li>
	            	<li><a href='Contact_Us.php?Patid=".$Patid."'>Contact Us</a></li>
	            	<li><a href='AboutUsPage.php?Patid=".$Patid."'>About US</a></li>
	        	</ul>
	        	<ul class='nav navbar-nav navbar-right'>
	        		<li><a href='PatDashboard.php'><span class='glyphicon glyphicon-user'></span> ".$login_session_name."  </a></li>
	        		<li><a href='signout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>

	        		</ul>";

    }
    else{

    echo '<ul class="nav navbar-nav navbar-left">
	            	<li><a class=" active1" href="index.php">Home</a></li>
	            	<li><a href="services.php">Services</a></li>
	            	<li><a href="Team.php">Our Team</a></li>
	            	<li><a href="Contact_Us.php">Contact Us</a></li>
	            	<li><a href="AboutUsPage.php">About US</a></li>
	        	</ul>
	        	<ul class="nav navbar-nav navbar-right">
	        		<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register </a></li>
	        		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      		</ul>';
}
   
?>

	        	

	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container -->
	    </nav><!-- /.navbar -->