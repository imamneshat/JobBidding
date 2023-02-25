
<?php
	include('connection.php');
	
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$mobile = trim($_POST['mob']);
	$password =md5( trim($_POST['cnf_pwd']));


	$values = '"'.$name.'", "'.$email.'", "'.$mobile.'", "'.$password.'"';
		
	$sql = "INSERT INTO  `admin`(`a_name`,`a_email`,`a_mobile`,`a_password`)VALUES($values)";
		if(mysqli_query($conn, $sql)) {
	    
		} else {
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}	

			header('location:admin.php');

?>