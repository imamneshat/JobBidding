
<?php

	include('connection.php');
	
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$mobile = trim($_POST['mob']);
	$dob = trim($_POST['dob']);
	$gender = trim($_POST['gen']);
	$password =md5( trim($_POST['cpwd']));
	$address = trim($_POST['addr']);
	$image = trim($_POST['images']);
	
	$otp = mt_rand(10,1000000);
	$mob = '+91'.$mobile;
		
        // Require the bundled autoload file - the path may need to change
        // based on where you downloaded and unzipped the SDK
        require __DIR__ . '/Twilio/autoload.php';

        // Use the REST API Client to make requests to the Twilio REST API
        use Twilio\Rest\Client;

        // Your Account SID and Auth Token from twilio.com/console
        $sid = 'AC1fe6f37c30d11563265566dec51b7ee0';
        $token = '40c60a291d885c14cf062f5d090ef8b2';
        $client = new Client($sid, $token);
        // echo $customerNumer = '+91'.$customerNumerile;
        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            $mob,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+16087360686',
                // the body of the text message you'd like to send
                'body' => "from Hesta bidding your OTP number is  $otp please do not share to others."
            )
        );

        echo $otp;

		$values = '"'.$name.'", "'.$email.'", "'.$mobile.'", "'.$dob.'", "'.$gender.'", "'.$password.'", "'.$address.'", "NULL" ';
		
		$sql = "INSERT INTO  `user`(`u_name`,`u_email`,`u_mobile`,`u_dob`,`u_sex`,`u_password`,`u_address`, `u_image`)VALUES($values)";
		if(mysqli_query($conn, $sql)){
	    
		 
		} else {
	    		
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	   
		}				
?>