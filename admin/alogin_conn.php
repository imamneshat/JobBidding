
<?php 
    ob_start();
    session_start();

?>

<?php

    include('connection.php');
    
    
    $error='';
    if (isset($_POST['submit']))  {
        if (empty($_POST['email']) || empty($_POST['pwd'])) {
            
            echo $error = "Username or password is invalid";
        
        } else {

        	   	$email=$_POST['email'];
            	$pwd=$_POST['pwd'];
            	$enc= md5($pwd); 
                              
            	$sql = "SELECT * FROM `admin` WHERE `a_email` = '$email' AND `a_password` = '$enc'";
             		// echo $sql;
            	$query = mysqli_query($conn,$sql);    

        		if(mysqli_num_rows($query) > 0) {
                    	   // echo $result;
            		$row = mysqli_fetch_array($query);
                            // echo $row[u_id];
                    $_SESSION['login_user'] = $row[a_name];
                    $_SESSION['login_id'] = $row[a_id];


                	header("location: main-page.php");

           		} else {
					echo $error = "Username or Password is invalid";
                        header("location: admin.php");

               		}
					mysqli_close($conn);
        		}
   	}


?>