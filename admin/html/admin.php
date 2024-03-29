
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Sign Up </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body onload="bdy();">			
	<div class="pages_agile_info_w3l">
		<?php include('header/header.php');?>
		
		<div class="over_lay_agile_pages_w3ls two">
			<div class="registration">
				<div class="signin-form profile">
					<h2>Sign up Form</h2>
					<div class="login-form">
						<form action="adminreg_db.php" method="post">
							<input type="text" name="name" placeholder="Username" required="name"/>
							<input type="email" name="email" placeholder="E-mail" required="email"/>
							<input type="password" name="password" placeholder="Password" required="password">
							<input type="password" name="cnf_password" placeholder="Confirm Password" required="password">
							<div class="tp">
								<input type="submit" value="SIGN Up" name="submit" onsubmit="emailValidate();valid();check();"/>
							</div>
						</form>
					</div>
					<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
					<h6>I have already account <a href="signin.php">Sign In</a><h6>
				</div>
			</div>
			<div class="copyrights_agile two"></div>	
		</div>
	</div>
	<div class="copyrights"></div>	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/snow.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>