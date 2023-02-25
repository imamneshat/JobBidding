
<?php

	include('connection.php');

	$msg = "";

	if(isset($_POST['submit'])) {
		
		$email = trim($_POST['email']);
		$pwd = md5(trim($_POST['pwd']));

		$sql ="UPDATE`admin`SET `a_password`='$pwd' WHERE `a_email`='$email'";

		if(mysqli_query($conn, $sql)) {
			$msg = "Data upload successfully";
					
		} else {
			
			$msg = "Data Not uploaded";
		}
			header('location:admin.php');	
	}

?>