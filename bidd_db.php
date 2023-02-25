
<?php
	include('connection.php');

	$uid = $_POST['uid'];
	$jobid = $_POST['jobid'];
	$amount = $_POST['amount'];
		
	$sql = "INSERT INTO `bidding`(`u_id`,`job_detail_id`,`bidd_cnf_budget`)VALUES('$uid','$jobid','$amount')";

		if(mysqli_query($conn, $sql)){

			header('location:dashboard.php');
	    
		} else {
	    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

		}	

?>