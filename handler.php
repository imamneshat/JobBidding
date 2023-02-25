
<?php

	include('connection.php');

	$uid = $_POST['uid'];
	$name = $_POST['name'];
	$disc = $_POST['disc'];
	$select = $_POST['select'];
	$add = $_POST['add'];
	$budget = $_POST['budget'];
	$expd = $_POST['expd'];
	$bid = $_POST['bidd_id'];
	$status = $_POST['status'];


	$sql = "INSERT INTO  job_detail(u_id,job_title,job_description,job_type,job_address,job_budget,job_exp)VALUES
	('$uid','$name','$disc','$select','$add','$budget','$expd')";
	
	if(mysqli_query($conn, $sql)){
	    
	    header('Location: dashboard.php');
		
		} else{
	    	
	    	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

?>