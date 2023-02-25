
<?php

	include('connection.php');

	$msg = "";

	if(isset($_POST['submit'])) {
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$mobile = trim($_POST['mob']);
		$dob = trim($_POST['dob']);
		$address = trim($_POST['addr']);
		$uid = trim($_POST['uid']);
		$pwd = md5(trim($_POST['pwd']));

		$target ="images/".basename($_FILES['image']['name']);

		$image = $_FILES['image']['name'];	 

			$sql ="UPDATE`user`SET`u_name`='$name',`u_email`='$email',`u_mobile`='$mobile',`u_password`='$pwd',`u_dob`='$dob',`u_address`='$address',`u_image`='$image' WHERE `u_id`='$uid'";
				
			mysqli_query($conn, $sql);

			if (move_uploaded_file($_FILES['temp_name']['name'],$target)) {

				$msg = "Data upload successfully";
					
			} else {

				$msg = "Data Not uploaded";
			
			}	
	}

			header('location:profile.php');
			
?>