
<?php

	include('connection.php');

	$msg = "";

	if(isset($_POST['submit'])) {

		$email = trim($_POST['email']);
		$pwd = md5(trim($_POST['pwd']));

		$sql ="UPDATE`user`SET `u_password`='$pwd' WHERE `u_email`='$email'";

		if(mysqli_query($conn, $sql)) {
			$msg = "Data upload successfully";
					
		} else {
			
			$msg = "Data Not uploaded";
		}
			header('location:login.php');	
	}

?>