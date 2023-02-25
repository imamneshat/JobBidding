
<?php
        
    $mobile = trim($_POST['mob']);
   
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

        session_start();

        include('connection.php');

            $error='';

            if(isset($_POST['submit']))  {

                if(empty($_POST['email']) || empty($_POST['mob'])) {
                    
                    echo $error = "Email or Mobile number is invalid";
                         
                } else {

            		$email=$_POST['email'];
            	   	$mobile=$_POST['mob'];

                	$sql ="SELECT * FROM `admin` WHERE `a_email` = '$email' AND `a_mobile` ='$mobile'";
                 		// echo $sql;
                	$query = mysqli_query($conn,$sql); 
            		
                    if(mysqli_num_rows($query) > 0) {
                        	   // echo $result;
                		$row = mysqli_fetch_array($query);
                                // echo $row[u_id];

                    	header('location:aforget.php');
               		    
                    } else {
    					
                        echo $error = " Email and Mobile number is invalid";
                        header('location: login.php');

                   	}
    					mysqli_close($conn);
            	}
       	}

?>
