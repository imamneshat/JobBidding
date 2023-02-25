
<?php

    session_start();

    include('connection.php');

    $error='';
    if(isset($_POST['submit']))  {

        if(empty($_POST['email']) || empty($_POST['pwd'])) {
            
            echo $error = "Username or password is invalid";
                 // echo "qwerty";
        } else {

    	   	$email=$_POST['email'];
        	$pwd=$_POST['pwd'];
        	$enc= md5($pwd); 
                          
        	$sql ="SELECT * FROM `user` WHERE `u_email` = '$email' AND `u_password` = '$enc'";
         		// echo $sql;
        	$query = mysqli_query($conn,$sql); 
    		
            if(mysqli_num_rows($query) > 0) {
                	   // echo $result;
        		$row = mysqli_fetch_array($query);
                        // echo $row[u_id];
                $_SESSION['login_user'] = $row[u_name];
                $_SESSION['login_id'] = $row[u_id];

            	header('location: dashboard.php');
       		
            } else {
			
        	    echo $error = "Username or Password is invalid";
                
                header('location: login.php');

           	}
				mysqli_close($conn);
		}
   	}
?>