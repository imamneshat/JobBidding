
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
        <title>Hesta job Bidder</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/post.css" rel='stylesheet' type='text/css'/>
		<!-- Fontawesome Icon font -->
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
        <link rel="stylesheet" href="css/recaptcha.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
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
			<!-- Contact section -->
			<section id="contact">
				<div class="container">
					<div class="row">
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Login</h2>							
						</div>
						<div class="col-md-3 contact-form wow animated fadeInLeft"></div>
						<div class="col-md-6 contact-form wow animated fadeInLeft" id="bdy">
							<form action="login_conn.php" method="post">
								<div class="input-field">
									<input type="text" name="email" id="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="password" name="pwd" id="pwd" class="form-control" placeholder="password">	
								</div>
								<span class="msg-error error"></span>
								<div class="forgot">
									<div class="g-recaptcha" id="recaptcha" data-sitekey="6Lf6QlkUAAAAAETWbPN0Z6fBYmlZhE2tJu4FG2e7">
									</div>
								</div>	
								<h4><a href="forget.php" style="color: #fff;">Forget Password</a></h4>
						       	
						       	<button type="submit" id="click-btn" name="submit" class="btn btn-blue btn-effect" onclick="validateLogin(event);">Login</button>
						       	<h4 style="color: #fff;">Don,t have an Account!<a style="color: #000;" href="register.php"> :- Register Now!</a></h4>
							</form>
						</div>
						<div class="col-md-3 wow animated fadeInRight"></div>
					</div>
				</div>
			</section>
			<!-- end Contact section -->
		</main>
		<!-- <?php include('recaptcha.php');?> -->
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
        <script src="js/recaptcha.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>	
		<script type="text/javascript">
			
			function validateLogin(event) {
				
				var e = document.getElementById("email").value;
				var p = document.getElementById("pwd").value;
				var c = document.getElementById("cap").value;
					
				if(e == "" || p == "" || c == "" && e == "email" || p == "pwd"){
					event.preventDefault();
					
					swal("All fields are Requierd!", "You clicked the button!", "info");
					
				} else {
					
					swal("Login successfull", "You clicked the button!", "success");				
				} 			
			}
		</script>
    </body>
</html>