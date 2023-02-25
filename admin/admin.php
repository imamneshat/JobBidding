
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Hesta job Admin Signin</title>
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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<div class="pages_agile_info_w3l">
			<?php include('header/header.php');?>
			<div class="over_lay_agile_pages_w3ls">
				<div class="registration">
					<div class="signin-form profile">
						<h2>Sign in Form</h2>
						<div class="login-form">
							<form action="alogin_conn.php" method="post">
								<input type="email" name="email" id="email" placeholder="E-mail">
								<input type="password" name="pwd" id="pwd" placeholder="Password">
								<div class="tp">
									<input type="submit" value="SIGN IN" name="submit" onclick="log(event);" />
								</div>
							</form>
						</div>
						<h5><a href="aforget.php">Forget Password</a></h5><br>
						<p><a href="signup.php"> Don't have an account?</a></p>
						<h6><a href="signup.php">Sign Up</a><h6>
					</div>
				</div>
				<div class="copyrights_agile"></div>	
			</div>
		</div>
		<div class="copyrights">
			<p>There’s just one more thing you might want to think about.<a href="http://www.hestabit.com">Hestabit</a></p>
		</div>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script src="js/screenfull.js"></script>
		<script src="js/scr.js"></script>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/snow.js"></script>
		<script src="js/gaq.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<script>
			
			function log(event){
				var e = document.getElementById("email").value;
				var p = document.getElementById("pwd").value;
					
				if(e == "" || p == "" && e == "email" || p == "pwd"){
					event.preventDefault();
					swal("All fields are Requierd!", "You clicked the button!", "info");
				} else {
					swal("Login successfull", "You clicked the button!", "success");				
				   } 			
			}
		</script>
	</body>
</html>