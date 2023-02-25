
<?php

	if(empty($_SESSION['login_id'])) {
		
		header('Location:admin.php');
	}

?>