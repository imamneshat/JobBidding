
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
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/dashboard.css" rel='stylesheet' type='text/css'/>
        <!-- <link href="css/about.css" rel='stylesheet' type='text/css'/> -->
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- <link rel="stylesheet" href="css/icon.css"> -->
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
       	<?php include('header/header.php');?>
		
		<main class="site-content" role="main">
        <!--
        Home Slider
        ==================================== -->
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="bg-img bg-img-1"></div>
						<div class="slide-caption">
                            <div class="caption-content" id="caption">
                                <h2>Jobs Every Time Every Where</h2>
                                <span>Part Time</span>
                            </div>
                        </div>
					</div>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content" id="caption">
                                <h2>Find To Jobs Which You Want</h2>
                                <span>Full Time</span>
                            </div>
                        </div>
					</div>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content" id="caption">
                                <h2>Love Your Work</h2>
                                <span>On Contract Basis</span>
                            </div>
                        </div>
					</div>
				</div>
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>
			</div><!-- /slider-wrapper -->
		</section>
        <!--
        End Home SliderEnd
        ==================================== -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Types of Jobs</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<a onclick="location.href = 'job_list.php?type=part time';"><i class="fa fa-taxi fa-3x"></i></a>
								</div>
								<h3>Part Time</h3>
								<p>A part-time contract is a form of employment that carries fewer hours per week than a full-time job. </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<a onclick="location.href = 'job_list.php?type=full time';"><i class="fa fa-briefcase fa-3x"></i></a>
								</div>
								<h3>Full Time</h3>
								<p>Full-time employment is employment in which a person works his/her employer employee or worker.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<a onclick="location.href = 'job_list.php?type=contract';"><i class="fa fa-compress fa-3x"></i></a>
								</div>
								<h3> On Contract</h3>
								<p>An employment contract of employment is a kind of contract used in labour and responsibilities between parties to a bargain. </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<a href="#portfolio"><i class="fa fa-list fa-3x"></i></a>
								</div>
								<h3>All Jobs</h3>
								<p>A job, or occupation, is a person's role in society. often regular and often performed in exchange for payment ("for a living").</p>							
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Service section -->
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Start Work</h3>
								<div id="works">
									<div class="work-item">
										<p>In response, the two friends created a new web-based platform that brought visibility and trust to remote work. It was so successful the two realized other businesses would also benefit from reliable access to a larger pool of quality talent, while workers would enjoy freedom and flexibility to find jobs online. Together they decided to start a company that would deliver on the promise of this technology.</p>
									</div>
									<div class="work-item">
										<p>Through Upwork businesses get more done, connecting with freelancers to work on projects from web and mobile app development to SEO, <br><br> social media marketing, content writing, graphic design, admin help and thousands of other projects. Upwork makes it fast, simple, and cost-effective to find, hire, work with, and pay the best professionals anywhere, any time.</p>
									</div>
									<div class="work-item">
										<p>Garcinia cambogia is one of the main 
											components in one of the best-selling 
											supplemental weight loss products, 
											Hydroxycut. <br><br> and researchers have concluded that "the evidence for G.cambogia is not compelling.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Welcome To Our Site</h3>								
						     	<div class="message-body">
									<img src="img/member-1.jpg" style="width: 100px; height: 100px;" class="pull-left" alt="member">
						       		<p>The Upwork story begins over a decade ago, when the tech lead of a Silicon Valley startup realized his close friend in Athens would be perfect for a web project. The team agreed he was the best choice, but were concerned about working with someone halfway around the globe. </p>
						     	</div>
						       	<a href="#testimonials" class="btn btn-border btn-effect pull-right">Read More</a>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>New Jobs</h2>
							<p>Try to find every time something new!!!.</p>
						</div>
						<ul class="project-wrapper wow animated fadeInUp">
							<?php
							
								include('connection.php');
							
								$sql = "SELECT * FROM job_detail  ORDER BY job_detail_id DESC";
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
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>About Us</h2>
							</div>
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg" style="width: 100px; height: 100px;" alt="Our Clients">
									<div class="clearfix">
										<span>Neshat Imam</span>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.. As one of the most visited locations on any given company’s site, the "About Us" page plays a large role in the first impression that you leave on a potential customer.This is where they come to learn more about your company and the people behind the brand. A customer looks here before they start to take your business (or the idea of collaborating with it) seriously.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Saurabh kumar</span>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.. As one of the most visited locations on any given company’s site, the "About Us" page plays a large role in the first impression that you leave on a potential customer.This is where they come to learn more about your company and the people behind the brand. A customer looks here before they start to take your business (or the idea of collaborating with it) seriously.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Annu</span>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.. As one of the most visited locations on any given company’s site, the "About Us" page plays a large role in the first impression that you leave on a potential customer.This is where they come to learn more about your company and the people behind the brand. A customer looks here before they start to take your business (or the idea of collaborating with it) seriously.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form name="myForm" action="contact.php" method="post">
								<div class="input-field">
									<input type="text" name="name" id="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" id="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" id="subject" class="form-control" placeholder="subject">
								</div>
								<div class="input-field">
									<textarea name="message" id="mesg" class="form-control" placeholder="Messages..."></textarea>
								</div>
						       	<button type="submit" name="submit" id="submit" class="btn btn-blue btn-effect" value="Send" onclick="validateForm(event);"> <i class="fa fa-paper-plane fa-lg"></button></i>
							</form>
						</div>
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>						
								<p><i class="fa fa-pencil"></i>Office in Noida<span>PO Box 345678</span> <span>Hestabit Technologies Pvt Ltd </span><span>Noida</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: 0120 472 8277 </p>
								<p><i class="fa fa-envelope"></i>https://www.hestabit.com/</p>
							</address>
						</div>
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			<section id="google-map">
				<div id="map" class="wow animated fadeInUp">
					<iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"></iframe>
				</div>
			</section>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            
            function validateForm(event) {   
                var x = document.forms["myForm"]["name"].value;
                var y = document.forms["myForm"]["email"].value;
                var z = document.forms["myForm"]["subject"].value;
                var a = document.forms["myForm"]["mesg"].value;
                
                if (x == "" || y == "" || z == "" || a == "") {
                    
                    event.preventDefault();
                    swal("Fields are incomplite!", "You clicked the button!", "error");                                    
                } else {  
                	
                	// window.location.replace("localhost/php/job/contact.php");                          
                    swal("Send Mail", "You clicked the button!", "success");

                }
            }    
        </script>
    </body>
</html>