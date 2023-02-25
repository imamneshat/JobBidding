
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
        <?php include('header/header2.php');?>
        <main class="site-content" role="main">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-2"></div>
        			<div class="col-md-8">
    					<table class="table table-striped" style="margin-top: 150px;">
							<thead>
						        <tr>
						            <th>Job Title</th>
                          			<th>Job Type</th>
                                    <th>Budget</th>
                          			<th>Current Bidd</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<?php 
						    		include('connection.php');
                                        ob_start();
                                        session_start();

                                        $uid = $_SESSION['login_id'];  
                                            
                                        $sql ="SELECT 
                                        job_detail.job_title,
                                        job_detail.job_detail_id,
                                        job_detail.job_type,job_detail.job_budget,job_detail.u_id,
                                        bidding.bidd_cnf_budget,bidding.job_detail_id FROM job_detail INNER JOIN bidding ON
                                        job_detail.job_detail_id =bidding.job_detail_id and job_detail.u_id = $uid 
                                        ";

                                        $result = mysqli_query($conn,$sql);
                                        
                                        while($rows = mysqli_fetch_array($result)) {

                                            $jobid = $rows['job_detail_id'];
                                            $job_title = $rows['job_title'];

                                            $sqli = "SELECT `bidd_cnf_budget` FROM 
                                            `bidding` WHERE `job_detail_id`='$jobid' ORDER BY `bidd_id`DESC";

                                            $result1 = mysqli_query($conn, $sqli);
                                            $row = mysqli_fetch_array($result1);
                                            $currentBid  = $row[0];
                                             
                                ?>
						        <tr>
						        	<?php echo"
	                                    <td>
	                                    
	                                        <a href=\"seeker_list.php?job_detail_id=$jobid-$job_title\">
	                                         {$rows['job_title']}
	                                        </a>
	                                    </td> "
                                    ?> 
						            <td><?php echo $rows['job_type']; ?></td>
                                    <td><?php echo $rows['job_budget']; ?></td>
                                    <td><?php echo $currentBid;?></td>
						        </tr>
						        <?php }?>
						    </tbody>
						</table>
					</div>
					<div class="col-md-2"></div>
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
    </body>
</html>






