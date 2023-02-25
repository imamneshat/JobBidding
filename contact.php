
<?php

	function sendmail($to, $name, $email, $subject, $message) {
    // From form
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Note: leave indentation as it is
    $message = <<<HTML
$message
HTML;

    $headers = "From: $name <$email>\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

  		
} 
	
    sendmail("neshatimam123@hotmail.com", $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);

	header('Location:index.php');

?>