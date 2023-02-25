
<?php

	include('connection.php');

	$uid = $_POST['uid'];
	$jobid = $_POST['jobid'];
	$amount = $_POST['amount'];
	$status = $_POST['status'];
	$sql = "INSERT INTO `bidding`(`u_id`,`job_detail_id`,`bidd_cnf_budget`,`status`)VALUES('$uid','$jobid','$amount','0')";

		if(mysqli_query($conn, $sql)){
			$jobbid = $rows['job_detail_id'];
			
			header('location:bidd.php');
	    
		} else {

	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

		}	

?>