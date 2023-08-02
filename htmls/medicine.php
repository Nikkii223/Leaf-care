<?php
include 'conn.php';
$sql="SELECT * FROM `medicine`";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Pompiere" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/AboutUsPage.css">

    <link rel="stylesheet" type="text/css" href="../css/wave.css">
    <link rel="stylesheet" type="text/css" href="../css/homepage_footer.css">


	<!-- bootstrap-JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
	
<style type="text/css">
	.footer_top {
        /*margin: 0px;*/
        padding-top:25px;
    }
    .navbar-fixed-top{
      position: fixed;
      width: 100%;
      z-index: 1030;
    }
    .active1{
      color:white!important;
      border-bottom: 2px solid #0cb8b6;
    }
    .navbar-light .navbar-nav .nav-link{
  color: #ff9900;
}
   .view-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
}
.thumbnail
{
    margin-bottom: 30px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 30px;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    border: 0;
}
.item.list-group-item .img-event {
    float: left;
    width: 30%;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    display: inline-block;
}
.item.list-group-item .caption
{
    float: left;
    width: 70%;
    margin: 0;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item:after
{
    clear: both;
} 
</style>
</head>
<body>
<?php include 'header2.php';?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
<div class="container" style="margin-top: 10px;">
  <h3 style="text-align: center;">Clinic List</h3>
    	    <div id="products" class="row view-group">

    		<?php
    			while ($row=$result->fetch_assoc()) {
    				
    			
    		?>
    		<!-- <div class="col-md-4">
    			<div class="services_grid">
					<h4>Login As Doctor</h4>
				</div>
			</div> -->
			 <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Medicine Name:- <?php echo $row['Medic_Name'];?></h4>
                            <p class="group inner list-group-item-text">
                                Medicine Description:- <?php echo $row['Description'] ;?>.</p>
                                  <p class="group inner list-group-item-text">
                               Potency:- <?php echo $row['Potency'] ;?>.</p>

                                
                                
                            <div class="row">

                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">Price 
                                       Rs. <?php echo $row['Price'] ;?></p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                      Expiry Date:-  <?php echo $row['ExpiryDate'] ;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php
			}
			?>

		</div>
      
   
</div>


 



		<?php include 'new_footer.php';?>
</body>
</html>