
<?php

	include('connection.php');

	if (!isset($_POST['submit'])) {
		// header('Location:dashboard.php');
	}

	$search = $_POST['search'];
	// echo  $search;

	 $sql = "SELECT * FROM job_detail WHERE job_title LIKE '$search%'";

	 $search_query = mysqli_query($conn, $sql);

		print_r($search_query['job_title']);
	
	if (mysqli_num_rows($search_query)!=0) {

		$search_rs=mysqli_fetch_assoc($search_query);

		print_r($search_rs);
		
	}

	?>

	<!-- <p> Search Result</p>
    <?php if (mysqli_num_rows($search_query)!=0) {

            do { ?>

            <p><?php echo $search_rs['job_title']; ?></p>

        <?php } while ($search_rs=mysqli_fetch_assoc($search_query)); 
                        
        } else {

            echo "No result found";
        }
    ?>

	 -->
	 




