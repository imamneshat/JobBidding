
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Hesta job Sign Up </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, 
		LG, SonyEricsson, Motorola web design" />
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
	<body>			
		<div class="pages_agile_info_w3l">
			<?php include('header/header.php');?>
			<div class="over_lay_agile_pages_w3ls two">
				<div class="registration">
					<div class="signin-form profile">
						<h2>Sign up Form</h2>
						<div class="login-form">
							<form action="adminreg_db.php" method="post">
								<input type="text" name="name" id="name" placeholder="Username"/>
								<input type="email" name="email" id="email" placeholder="E-mail"/>
								<input type="text" name="mob" id="mob" placeholder="Mobile"/>
								<input type="password" name="password" id="password" placeholder="Password">
								<input type="password" name="cnf_password" id="confirm_password" placeholder="Confirm Password">
								<span id='message'></span>
								<div class="tp">
									<input type="submit" value="SIGN Up" name="submit" onclick="reg(event);" />
								</div>
							</form>
						</div>
						<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
						<h6>I have already account <a href="admin.php">Sign In</a><h6>
					</div>
				</div>
				<div class="copyrights_agile two"></div>	
			</div>
		</div>
		<div class="copyrights"><p>There’s just one more thing you might want to think about.<a href="http://www.hestabit.com">Hestabit</a></div>	
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
		<script src="js/match.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			function reg(event){
		
			    var n = document.getElementById("name").value;
				var e = document.getElementById("email").value;
				var m = document.getElementById("mob").value;
					
				if(n == "" || e == "" || m == ""){
					
					event.preventDefault();
					swal("All fields are Requierd!", "You clicked the button!", "info");
					
				} else {
			
					swal("registration successfull", "You clicked the button!", "success");				
				   } 			
			}
		</script>
	</body>
</html>