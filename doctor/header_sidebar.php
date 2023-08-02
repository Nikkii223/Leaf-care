<nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="dashboard.php">Doctor Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $_SESSION['d_email'];?><i class="caret"></i></span><img src="images/doctor.png"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
		               
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    <!-- <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu Levels</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>
                            
                            <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>
			
						<li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>

					   </ul>
                    </li> -->
					 <li>
                        <a href="blog_list.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Blog List</span> </a>
                    </li>
                    <li>
                        <a href="add_blog.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Add Blog</span> </a>
                    </li>
                    
                    <li>
                        <a href="news_list.php" class=" hvr-bounce-to-right"><i class="fa fa-hospital-o nav_icon"></i> <span class="nav-label">News List</span> </a>
                    </li>
                    <li>
                        <a href="doc_ap.php" class=" hvr-bounce-to-right"><i class="fa fa-hospital-o nav_icon"></i> <span class="nav-label">Appionment List</span> </a>
                    </li>
                     <li>
                        <a href="add_news.php" class=" hvr-bounce-to-right"><i class="fa fa-hospital-o nav_icon"></i> <span class="nav-label">Add News</span> </a>
                    </li>
                     <li>
                        <a href="remedies_list.php" class=" hvr-bounce-to-right"><i class="fa fa-newspaper-o nav_icon"></i> <span class="nav-label">Remedies</span> </a>
                    </li>
                    <li>
                        <a href="add_remedies.php" class=" hvr-bounce-to-right"><i class="fa fa-medkit nav_icon"></i> <span class="nav-label">Add Remedies</span> </a>
                    </li>
                    <li>
                        <a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-out nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                   
                    
                </ul>
            </div>
			</div>
        </nav>