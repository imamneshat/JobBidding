
<?php
	
    include("contact.php");

		 $otp = mt_rand(10,1000000);
		 $mob = '+91'.$_POST['mob'];
		
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
echo $client->messages->create(
    // the number you'd like to send the message to
    $mob,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+16087360686',
        // the body of the text message you'd like to send
        'body' => "from Hesta bidding System Thank you to contact us  Have a nice day."
    )
);




?>















