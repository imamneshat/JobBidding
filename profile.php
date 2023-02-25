
<?php session_start(); include('session.php');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hesta job Bidder List</title>        
        <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
        
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS
        ================================================== -->
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href="css/style1.css" rel='stylesheet' type='text/css'/>
        <link href="css/profile.css" rel='stylesheet' type='text/css'/>
        <!-- <link href="css/post.css" rel='stylesheet' type='text/css'/> -->
        <!-- Fontawesome Icon font -->
        <link href="css/dashboard.css" rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- <link href="css/post.css" rel='stylesheet' type='text/css'/> -->

        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="body">
        <!-- preloader -->
        <div id="preloader">
            <div class="loder-box">
                <div class="battery"></div>
            </div>
        </div>
        <!-- end preloader -->
        <?php include('header/header2.php');
        	
        	session_start();
			
			$uid =  $_SESSION['login_id'];
			
			if(isset($_GET['uid']) && !empty($_GET['uid'])){

                $url = $_GET['uid'];
                    
                } else {
                    // echo "id not Found";
            	
            	}

        ?>
        <?php
			
			include('connection.php');

			$sql ="SELECT * FROM `user` where `u_id` = '$uid'";

			$result = mysqli_query($conn,$sql);
            while($rows = mysqli_fetch_array($result)) {

                $uid = $rows['u_id'];
		?>
        <main class="site-content" role="main" id="site-content">
        	<h1>Profile </h1>
        	<div class="main-agileits" id="main-agileits">
				<div class="right-wthree">
					<img id="blah" src="img/<?php echo $rows['u_image'];?>" alt="your image" class="img-responsive  img-circle"/>
		    		
		    		<p>Change Profile Pic</p>
					<h2><?php echo $rows['u_name'];?></h2>
					<h2> User id: <?php echo $rows['u_id'];?></h2>
				</div>
				<div class="left-w3ls">
					<ul class="address">
						<li>
							<ul class="address-text" id="address-text">
								<li><b>PHONE:</b></li>
								<li>+91-<?php echo $rows['u_mobile'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS: </b></li>
								<li><?php echo $rows['u_address'];?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL:</b></li>
								<li><?php echo $rows['u_email'];?></a></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>Gender: </b></li>
								<li><?php echo $rows['u_sex'];?></li>
							</ul>
						</li>
					</ul>
				</div>	
				<button type="buton" class="btn btn-blue btn-effect" data-toggle="modal" data-target="#myModal">Edit Profile</button>
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal">&times;</button>
							    <center><h4 class="modal-title">Profile detail</h4></center>
							</div>
							<div class="modal-body">
								<form action="profile_db.php" method="post" enctype="multipart/form-data">
									<div class="right-wthree">
										<input type="hidden" name="size" value="1000000">
										<img id="blah" src="img/<?php echo $rows['u_image'];?>"  alt="your image" class="img-responsive"/>
		    							<input type="file" name="image" onchange="readURL(this);" value="<?php echo $rows['u_image'];?>"/><p>
									</div>						
									<input type="hidden" class="form-control" id="inputId" name="uid" value="<?php echo $rows['u_id'];?>">
									<div class="form-group">
	    								<label for="inputName">Name</label>
	    								<input type="text" class="form-control" id="inputName" name="name" value="<?php echo $rows['u_name'];?>">
									</div>
									<div class="form-group">
	    								<label for="inputEmail">Em@il</label>
	    								<input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $rows['u_email'];?>">
									</div>
									<div class="form-group">
	    								<label for="inputNumber">Mobile No.</label>
	    								<input type="number" class="form-control" id="inputNumber" name="mob" value="<?php echo $rows['u_mobile'];?>">
									</div>
									<div class="form-group">
	    								<label for="inputDate">Date of Birth</label>
	    								<input type="date" class="form-control" id="inputNumber" name="dob" value="<?php echo $rows['u_dob'];?>">
									</div>
									<div class="form-group">
	    								<label for="inputDate">Change Password</label>
	    								<input type="Password" class="form-control" id="inputNumber" name="pwd" value="<?php echo $rows['u_password'];?>">
									</div>
									<div class="form-group">
	    								<label for="inputAddress">Address</label>
	    								<input type="text" class="form-control" id="inputAddress" name="addr" value="<?php echo $rows['u_address'];?>">
									</div>
									<input type="submit" class="btn btn-blue btn-effect" value="Save & Change" name="submit">
								</form>
								<?php }?>
							</div>
				        </div>		      
					</div>
				</div>	
			</div>
        </main>
  		<?php include('footer/footer.php');?>
        
        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/main.js"></script>
        <script src="js/button.js"></script>
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/query.js"></script>
		<script src="js/profile.js"></script>
    </body>
</html>






