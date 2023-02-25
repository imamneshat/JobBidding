
<?php session_start(); include('session.php');?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Hesta job Admin Dashboard</title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	</head>
	<body>
		<div class="wthree_agile_admin_info"></div>
		<?php include('header/header1.php');?>
		<?php  
            include('connection.php');                    
            $sql = "SELECT COUNT(1) FROM user";
            $result = mysqli_query($conn,$sql);
         
            $rows = mysqli_fetch_array($result);
     			
     			$total = $rows[0];

     		$sqli = "SELECT COUNT(1) FROM job_detail";
            $result1 = mysqli_query($conn,$sqli);
         
            $rows1 = mysqli_fetch_array($result1);
     			
     			$total1 = $rows1[0];
     			
     		$sql2 = "SELECT COUNT(1) FROM job_detail";
            $result2 = mysqli_query($conn,$sql2);
         
            $rows2 = mysqli_fetch_array($result2);
     			
     			$total2 = $rows2[0];
     			
     		$sql3 = "SELECT COUNT(1) FROM bidding";
            $result3 = mysqli_query($conn,$sql3);
         
            $rows3 = mysqli_fetch_array($result3);
     			
     			$total3 = $rows3[0];

     		$sql4 = "SELECT COUNT(1) FROM admin";
            $result4 = mysqli_query($conn,$sql4);
         
            $rows4 = mysqli_fetch_array($result4);
     			
     			$total4 = $rows4[0];				
     			// $row = mysqli_num_rows($rows);                                            
        ?>  
		<div class="clearfix"></div>
		<div class="inner_content">
			<div class="inner_content_w3_agile_info">
				<div class="agile_top_w3_grids">
					<ul class="ca-menu">
						<li>
							<a href="u_job_post.php">
								<i class="glyphicon glyphicon-send" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main"><?php echo $total2;?></h4>
									<h3 class="ca-sub">Job poster</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="u_job_recive.php">
							  	<i class="fa fa-database" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main one"><?php echo $total3;?></h4>
									<h3 class="ca-sub one">job reciver</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="job_data.php">
								<i class="fa fa-database" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main two"><?php echo $total1;?></h4>
									<h3 class="ca-sub two">job list</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="user_data.php">
								<i class="fa fa-user" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main three"><?php echo $total;?></h4>
									<h3 class="ca-sub three">users</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="admin_data.php">
								<i class="fa fa-user" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main four"><?php echo $total4;?></h4>
									<h3 class="ca-sub four">Admin Data</h3>
								</div>
							</a>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="agile_top_w3_post_sections">
				    <div class="col-md-6 agile_top_w3_post agile_info_shadow">
					    <div class="img_wthee_post">
						    <h3 class="w3_inner_tittle">Latest Report</h3>
							<div class="stats-wrap">
								<div class="count_info">
									<h4 class="count">65,800,587 </h4><span class="year">Total Companies</span>
								</div>
								<div class="year-info">
									<p class="text-no">20</p><span class="year">This Year</span>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="stats-wrap">
								<div class="count_info">
									<h4 class="count">2,690 </h4><span class="year">Total Companies</span>
								</div>
								<div class="year-info">
									<p class="text-no">40</p><span class="year">This Month</span>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="stats-wrap">
								<div class="count_info">
									<h4 class="count">24,660 </h4><span class="year">Total Companies</span>
								</div>
								<div class="year-info">
									<p class="text-no">30 </p><span class="year">This Week</span>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="stats-wrap">
								<div class="count_info">
									<h4 class="count">1,204</h4><span class="year">Total Companies</span>
								</div>
								<div class="year-info">
									<p class="text-no">10</p><span class="year">This Day</span>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
					    <div class="img_wthee_post1">
							<h3 class="w3_inner_tittle"> Flip Clock</h3>
							<div class="main-example">
								<div class="clock"></div>
								<div class="message"></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="copyrights"> <p>There’s just one more thing you might want to think about.<a href="http://www.hestabit.com">Hestabit</a></div>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script src="js/amcharts.js"></script>
	   	<script src="js/serial.js"></script>
		<script src="js/export.js"></script>	
		<script src="js/light.js"></script>
		<script src="js/chart1.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<script type="text/javascript" src="js/circles.js"></script>
		<script src="js/skycons.js"></script>
		<script>
			var icons = new Skycons({"color": "#fcb216"}),
				list  = ["partly-cloudy-day"],i;

			for(i = list.length; i--; )
				icons.set(list[i], list[i]);
			    icons.play();
		</script>
		<script src="js/screenfull.js"></script>
		<script>
			$(function () {
				$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
					if (!screenfull.enabled) {
					return false;
					}
					$('#toggle').click(function () {
					screenfull.toggle($('#container')[0]);
					});	
			});
		</script>
		<script src="js/flipclock.js"></script>
		<script type="text/javascript">
			var clock;
			
			$(document).ready(function() {
				
				clock = $('.clock').FlipClock({
			        clockFace: 'HourlyCounter'
			    });
			});
		</script>
		<script src="js/bars.js"></script>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	</body>
</html>