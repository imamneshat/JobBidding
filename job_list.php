
<?php 
	
	if (isset($_GET['type']) && !empty($_GET['type'])){

		$url = $_GET['type'];
	} else {
		echo "job not Found";
	}
?>
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
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/dashboard.css" rel='stylesheet' type='text/css'/>
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

       	<?php include('header/header1.php');?>
       	<main class="site-content" role="main">
			<!-- portfolio section -->
			<section id="portfolio" style="margin-top: 30px;">
				<div class="container">
					<div class="row">
						<div class="sec-title text-center wow animated fadeInDown">
							<h2><?php if($url == 'part time') echo "Part Time"; else if ($url == 'full time') echo "Full Time"; else if ($url == 'contract') echo "Contract";?></h2>
							<p>Try to find every time something new!!!.</p>
						</div>
						<ul class="project-wrapper wow animated fadeInUp">
							<?php
								include('connection.php');
								
								$sql = "SELECT * FROM `job_detail` WHERE `job_type` = '$url' ORDER BY `job_detail_id` DESC";
								$result = mysqli_query($conn, $sql);
								while ($rows = mysqli_fetch_array($result)) {
						
							?>
							<li class="portfolio-item">
								<img src="img/portfolio/item7.jpeg" class="img-responsive" alt="">
								<figcaption class="mask">
									<h3><a href="login.php"><?php echo  $rows['job_title']; ?></a></h3>
									<h4><?php echo $rows['job_exp']; ?></h4>
									<h4><?php echo $rows['job_type'];?></h4>
									<h4>&#8377;<?php echo $rows['job_budget'];?></h4>
									<p><?php echo $rows['job_address'];?></p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="<?php echo  $rows['job_title']; ?>" data-fancybox-group="works" href="img/portfolio/item7.jpeg"><i class="fa fa-search"></i></a></li>
								</ul>
							</li>
							<?php }?>	
						</ul> 	
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
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
    </body>
</html>
