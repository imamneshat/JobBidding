
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
						<h2>Forget Password</h2>
						<div class="login-form">
							<form id="reg-form" action="apassword_db.php" method="post">
								<input type="email" name="email" id="email" placeholder="please enter ragister email id">
								<input type="text" name="mob" id="mob" placeholder="please enter ragister mobile number"/>
								<div class="tp" data-toggle="collapse" data-target="#demo">
									<input type="submit" value="Next" name="submit" onclick="reg(); timer(60); show();" />
								</div>
								 <input type="submit" value="Re-Send OTP" name="submit" id="resend" onclick="reg(); timer(60);" style="display: none;"/>
							</form>
						</div>
						<div class="login-form">
						<div id="demo" class="collapse">
							<form action="achange_pwd.php" method="post" onsubmit="return checkOtp(event);">
								<input type="text" name="varify" id="varify" class="form-control" placeholder="Enter OTP" id="varify"/>
								<div style="color: #000;">Time left = <span id="timer"></span></div>
								<div class="tp">
									<input type="submit" id="submit-data" value="submit" name="submit"/>
								</div>
								</form>
							</div>	
						</div>
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
			function reg(){
				
			    var n = document.getElementById("email").value;
				var e = document.getElementById("mob").value;
					
				if(n == "" || e == ""){
					
					swal("All fields are Requierd!", "You clicked the button!", "info");
					
				} 			
			}

			function show(){

				document.getElementById("resend").style.display = "block";
			}
		</script>
		<script>
			var glb_otp;
			$('#reg-form').submit(function(e) {
				e.preventDefault();
				var form = new FormData($(this)[0]);
					$.ajax({
						url: 'apassword_db.php',
						method: 'post',
						processData: false,
						data: $(this).serialize(),
						
						success: function(res) {
							// console.log("res",res);
						var  urOtp = res;
						setValue(urOtp);
							
							}
					});
			});
					function setValue(val) {
						glb_otp = val;
						go=glb_otp.trim();
						console.log(go);
					}
					function checkOtp(event) { 
						var otp = document.getElementById('varify').value;
						console.log("value", otp);
						
						if(go == otp) {
							
							swal("Please Change your Password", "You clicked the button!", "success");
							
							window.location.replace("forget.php");
							// console.log("user verified");
						} else {
						
							event.preventDefault();
							swal("OTP Invalid", "You clicked the button!", "warning");
							// console.log("user not valid");

						}
					}
		</script>
		<script type="text/javascript">

				let timerOn = true;
			function timer(remaining) {

				document.getElementById("varify").disabled = false;

				var m = Math.floor(remaining / 60);
				var s = remaining % 60;
				  
				m = m < 10 ? '0' + m : m;
				s = s < 10 ? '0' + s : s;
				
				document.getElementById('timer').innerHTML = m + ':' + s;
				  remaining -= 1;
				  
				  	if(remaining >= 0 && timerOn) {
				    	setTimeout(function() {
				        
				        timer(remaining);
				 	   	
				 	   	}, 1000);
				    
				    	return;
					}

				  	if(!timerOn) {
				    	// Do validate stuff here
				    	if (go == otp) {

				    		swal("OTP Invalid", "You clicked the button!", "warning");
				    	}
				    	return;
				  	}
				  
				  		// Do timeout stuff here
				  		swal("Timeout for otp!", "You clicked the button!", "info");
				  		document.getElementById("varify").disabled = true;
				  		
				}
        </script>
	</body>
</html>