
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
        <link href="css/search.css" rel='stylesheet' type='text/css'/>
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
        <?php include('connection.php');?>
        <main class="site-content" role="main">
            <!-- portfolio section -->
            <section id="portfolio">
                <div class="banner">
                    <div class="container">
                        <div class="row">
                            <div id="search_wrapper1">
                                <div id="search_form" class="clearfix">
                                    <h1>Start your job search</h1>
                                    <form method="post" action="">
                                        <input type="text" name="search" class="live-search-box" placeholder="Search Job ..... ">
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="sec-title text-center wow animated fadeInDown">
                            <h1>Dashboard</h1>
                        </div>
                        <ul class="live-search-list">
                            <ul class="project-wrapper wow animated fadeInUp">
                                <?php

                                    $sql ="SELECT * FROM job_detail  ORDER BY job_detail_id DESC";
                                    $result2 = mysqli_query($conn, $sql);
                                       // ech $result2
                                    while ($rows = mysqli_fetch_array($result2)) {

                                        $jobid = $rows['job_detail_id'];
                                        $job_tt = $rows['job_title'];
                                        $job_type = $rows['job_type'];
                                        $job_exp = $rows['job_exp'];
                                        $job_budget = $rows['job_budget'];
                                        $job_disc = $rows['job_description'];
                                        $job_addr = $rows['job_address'];

                                        $sqli = "SELECT `bidd_cnf_budget` FROM `bidding` WHERE `job_detail_id`= '$jobid' ORDER BY `bidd_id` DESC";

                                        $result1 = mysqli_query($conn, $sqli);
                                        $row = mysqli_fetch_array($result1);
                                        $currentBid  = $row[0];
                                ?>
                                <li class="portfolio-item">
                                    <img src="img/portfolio/item7.jpeg" class="img-responsive" alt="">
                                    <figcaption class="mask">
                                        <?php $job_id = $rows['job_detail_id'];?>
                                        <?php $job_tt = $rows['job_title'];?>
                                        <?php $job_type = $rows['job_type'];?>
                                        <?php $job_exp = $rows['job_exp'];?>
                                        <?php $job_budget = $rows['job_budget'];?>
                                        <?php $job_disc = $rows['job_description'];?>
                                        <?php $job_addr = $rows['job_address'];?>
                                        <!-- <h3>id:<?php echo $job_id;?></h3> -->
                                        <h3><?php echo $job_tt; ?></h3>
                                        <h4><?php echo $job_exp; ?></h4>
                                        <h4><?php echo $job_type;?></h4>
                                        <!-- <h4><?php echo $job_disc;?></h4> -->
                                        <h4>&#8377;<?php echo $job_budget;?></h4>
                                        <h4><b>current bidd &#8377;<?php echo $currentBid; ?></b></h4>
                                        <p><?php echo $job_addr;?></p>
                                        <button type="button" class="btn btn-blue btn-effect" data-toggle="modal" id="<?php echo $rows['job_detail_id'];?>" data-target="#myModal" onclick="getValue(<?php echo $job_id;?>,'<?php echo $job_tt;?>','<?php echo $job_type;?>','<?php echo $job_exp;?>',<?php echo $job_budget;?>,'<?php echo $job_disc;?>','<?php echo $job_addr;?>')">Bid Now</button> 
                                    </figcaption>
                                    <ul class="external">
                                        <li><a class="fancybox" title=jobtitle:-"<?php echo  $rows['job_title']; ?>" data-fancybox-group="works" href="img/portfolio/item7.jpeg"><i class="fa fa-search"></i></a></li>
                                    </ul>
                                </li>
                                <?php }?> 
                            </ul>  
                        </ul> 
                    </div>
                </div>
            </section>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2><?php session_start();echo "<h4>WELCOME:- \t".$_SESSION['login_user'].":-Please Enter Your Bidding Amount </h4>"; ?></h2>
                        </div>
                        <form action="bidd_db.php" method="post">
                            <div class="form-group">
                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="modalInput" name="jobid" value="<?php echo $jobid;?>"/>
                                    <input type="hidden" class="form-control" value="<?php 
                                    echo $_SESSION['login_id']?>" name="uid"/>

                                    <label for="inputName">Job Title</label>
                                    <input type="text" class="form-control" id="modalInput1" name="job_tt" value="<?php echo $job_tt;?>"/>
                                    
                                    <label for="inputName">Job Type</label>
                                    <input type="text" class="form-control" id="modalInput2" name="job_type" value="<?php echo $job_type;?>"/>
                                    
                                    <label for="inputName">Expiry Date</label>
                                    <input type="text" class="form-control" id="modalInput3" name="job_exp" value="<?php echo $job_exp;?>"/>
                                    
                                    <label for="inputName">Job Budget</label>
                                    <input type="text" class="form-control" id="modalInput4" name="job_budget" value="<?php echo $job_budget;?>"/>

                                    <label for="inputName">Job Descriptions</label>
                                    <input type="text" class="form-control" id="modalInput5" name="job_disc" value="<?php echo $job_disc;?>"/>

                                    <label for="inputName">Job Location</label>
                                    <input type="text" class="form-control" id="modalInput6" name="job_addr" value="<?php echo $job_addr;?>"/>

                                    <label for="inputName">Your Amount</label>
                                    <input type="number" name="amount" class="form-control" id="amount" placeholder="please enter your bid amount"/>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" id="bidd" class="btn btn-blue btn-effect" name="submit" value="Ok"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <script src="js/search.js"></script>
    </body>
</html>
