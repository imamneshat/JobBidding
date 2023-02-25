
<?php

	if(empty($_SESSION['login_id'])) {
		
		header('Location:login.php');
	}

?>