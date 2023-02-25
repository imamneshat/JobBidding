
<?php
    $job_detail_id = $_REQUEST['job_detail_id'];

    $id = explode('-', $job_detail_id);
    $job_id = $id[0];
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
        <?php include('connection.php');?>
        <?php include('header/header2.php');?>
        <main class="site-content" role="main">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-2"></div>
        			<div class="col-md-8">
    					<table class="table table-striped" id="table">
							<h4 style="margin-top: 110px;">Job Title:<u><?php echo $id[1];?></u></h4>
                            <thead>
						        <tr>
						            <th>Name of Job Bidder</th>
                                    <th>Bid Amount</th>
						        </tr>
						    </thead>
						    <tbody>
						    	 <?php

                                    $sql = "SELECT 
                                    user.u_name, 
                                    bidding.bidd_cnf_budget 
                                    FROM 
                                    bidding ,user
                                    WHERE 
                                    bidding.u_id = user.u_id AND
                                    bidding.job_detail_id = $job_id";

                                    $result = mysqli_query($conn,$sql);
                                    while($rows = mysqli_fetch_array($result)) {

                                        $jobid = $rows['job_detail_id'];

                                        $sqli = "SELECT 
                                        user.u_name, 
                                        bidding.bidd_cnf_budget
                                        FROM bidding,user
                                        WHERE
                                        bidding.job_detail_id = $jobid";

                                        $result1 = mysqli_query($conn, $sqli);
                                        $row = mysqli_fetch_array($result1);
                                        // $currentBid  = $row[0];
                                ?>
						        <tr>
						            <td><?php echo $rows['u_name']; ?></td>
                                    <td>&#8377;<?php echo $rows['bidd_cnf_budget']; ?></td>
						        </tr>
						        <?php }?>
						    </tbody>
						</table>
						<button type="button" class="btn btn-blue btn-effect" data-toggle="modal" id="<?php echo $rows['job_detail_id'];?>" data-target="#myModal"onclick="getValue(<?php echo $job_id ?>)" >Re-Bid
                        </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2><?php session_start();echo "<h4>WELCOME:- \t".$_SESSION['login_user'].":-Please Re-Enter Your Bidding Amount </h4>"; ?></h2>
                                    </div>
                                    <form action="detailbid_db.php" id=esh"form" method="post">
                                        <div class="form-group">
                                            <div class="modal-body">
                                                <input type="hidden" class="form-control" id="modalInput" name="jobid"/>
                                                <input type="hidden" class="form-control" value="<?php session_start();
                                                echo $_SESSION['login_id']?>" name="uid"/>
                                                <input type="number" name="amount" class="form-control" id="amount" placeholder="please again enter your bid amount"/>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-blue btn-effect" id="bidd" name="submit" value="Ok" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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






