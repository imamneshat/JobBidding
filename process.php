
<?php
  	
  	if(isset($_POST['submit'])){

	} else {
			
		$captcha = $_POST['g-recaptcha-response'];
		$secret = ''6Lf6QlkUAAAAAETWbPN0Z6fBYmlZhE2tJu4FG2e7'';
		$ip = $_SERVER['REMOTE_ADDR'];

		$action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		result = json_decode($action,TRUE);

		if ($result['success']) {
	
			echo "your request has been sent.";
			
		} else {
				
			header('Location: dashboard.php');
		}
	}

?>


