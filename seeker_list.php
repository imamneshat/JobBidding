
<?php session_start(); include('session.php');?>
<?php

    $job_detail_id = $_REQUEST['job_detail_id'];
    
    $id = explode('-',$job_detail_id);    
    $job_id = $id[0];
    $uid;
    if(isset($_GET['uid']) && !empty($_GET['uid']))
    {
        $uid = $_GET['uid'];
        // echo $uid;
    }
    // echo $job_id;
    
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hesta job Bidder List</title>        
        <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
        
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS
        ================================================== -->
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <!-- <link href="css/post.css" rel='stylesheet' type='text/css'/> -->
        <!-- Fontawesome Icon font -->
        <link href="css/dashboard.css" rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="body">
        <!-- preloader -->
        <div id="preloader">
            <div class="loder-box">
                <div class="battery"></div>
            </div>
        </div>
        <!-- end preloader -->
        <?php include('header/header2.php');
              
              include('connection.php');  
            
            if(isset($_GET['bid']) && !empty($_GET['bid'])) {
                
                $url = $_GET['bid'];
                $sqld ="DELETE FROM `bidding` WHERE `bidd_id`='$url'";
                $result1 = mysqli_query($conn,$sqld);
                
                if ($result1) {
                
                    echo "Deletion successfull";
                
                } else {
                
                    echo "Deletion not complete";
                
                }

            }

            function onSuccessSendMAil(){
            
                if(isset($_GET['abid']) && !empty($_GET['abid'])) {

                    $abid = $_GET['abid'];
                    $jd_id = explode('-',$abid); 
                    $bid_id = $jd_id[0];
                    // $job_id = $jd_id[0];

                    $sqli = "UPDATE `job_detail` SET `bidd_id` = $bid_id, 
                    `status` = 1 WHERE `job_detail_id` = $jd_id[1]";
                    
                    $result2 = mysqli_query($conn,$sqli);
                     
                     // print_r($sqli);
                    if ($result2) {
                        
                        $acceptedUser = mysqli_query($conn,"SELECT DISTINCT job_detail.u_id,job_detail.job_title,user.u_name,user.u_email,user.u_id,bidding.bidd_cnf_budget,bidding.u_id,bidding.job_detail_id,job_detail.job_detail_id,job_detail.job_title FROM bidding INNER JOIN user INNER JOIN job_detail ON user.u_id = bidding.u_id AND job_detail.job_detail_id = bidding.job_detail_id");
                        if(mysqli_num_rows($acceptedUser)) {
                            $acceptedUserRow = mysqli_fetch_array($acceptedUser);

                                $email = $acceptedUserRow['u_email'];
                                $uname = $acceptedUserRow['u_name'];
                                $job = $acceptedUserRow['job_title'];
                                $bid = $acceptedUserRow['bidd_cnf_budget'];
                                   
                                    // acceptedUser

                                    $to = $email;
                                    $from ="neshatimam123@hotmail.com";
                                    $subject ="Congratulation Your $bid bid is accepted";
                                    $message ="Congratulation Mr/Miss $uname you are selected for this $job job.";
                                    
                                    $headers = 'From: Neshat' . $from;
                                    $headers .= "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
                                    mail($to,$subject,$message,$headers);


                                    $to_2 = $email;
                                    $from ="neshatimam123@hotmail.com";
                                    $subject_2 ="Congratulation you are select to $uname bidder";
                                    $message_2 ="Congratulation Mr/Miss $uname you are select for this $job job to Mr/Miss $uname bidder .";
                                    
                                    $headers_2 = 'From: Neshat' . $from;
                                    $headers_2 .= "MIME-Version: 1.0" . "\r\n";
                                    $headers_2 .= "Content-type:text/html;charset=utf-8" . "\r\n";
                                    mail($to_2,$subject_2,$message_2,$headers_2);

                                    $sendAcceptUser = mail($to,$sub,$msg,$headers);
                                    $sendPosterUser = mail($to_2,$sub_2,$msg_2,$headers_2);

                                    if($sendAcceptUser == true && $sendPosterUser == true) {
                                        
                                        echo "user Accepted";
                                    
                                    } else {
                                        echo 'user Accepted else part';
                                    }
                                }

                        } else {
                                
                            echo "Updation not complete";
                        }
                }
            }
        ?>

        <main class="site-content" role="main">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-2"></div>
        			<div class="col-md-8">
    					<table class="table table-striped" id="table">
							<h4 style="margin-top: 110px;">Job Title:<u><?php echo $id[1];?></u></h4>
                            <thead>
						        <tr>
						            <th>Name of Bidder</th>
                                    <th>Bidding Price</th>
                                    <th>Accept/Decline</th>
						        </tr>
						    </thead>
						    <tbody>
                                <?php
                                    $array = array();

                                    $sql = "SELECT 
                                    user.u_name,user.u_id, 
                                    bidding.bidd_cnf_budget,bidding.bidd_id
                                    FROM 
                                    bidding ,user 
                                    WHERE 
                                    bidding.u_id = user.u_id AND
                                    bidding.job_detail_id = $job_id";
                                    $result = mysqli_query($conn,$sql);
                                    while($rows = mysqli_fetch_array($result)) {

                                        $bid = $rows['bidd_id'];
                                        $uid = $rows['u_id'];
                                         // Array
                                         array_push($array, $bid);
                                ?>
						        <tr>
						            <td><?php echo $rows['u_name'];?></td>
                                    <td>&#8377;<?php echo $rows['bidd_cnf_budget'];?></td>
                                    <td>
                                      <!-- if ($rows['status'] == 0) {
                                        // echo "<a  class=\"btn btn-blue btn-effect\" 
                                        //     href=\"seeker_list.php?abid=$bid-$job_id&uid=$uid\">Accept
                                        // </a>"; 
                                     // } -->

                                        <button class="btn btn-blue btn-effect" id="<?php echo $bid; ?>" onclick="return getBidId(event);">Accept</button>
                                        <a class="btn btn-blue btn-effect" href="seeker_list.php?bid=<?php echo $bid;?>">Decline</a>
                                    </td>
						        </tr>
						        <?php } 
                                // Convert to json
                                $array_to_json = json_encode( $array ); ?>
						    </tbody>
						</table>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
        </main>
        <?php include('footer/footer.php');?>
        
        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/main.js"></script>
        <script src="js/button.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>

            function getBidId(event) {
               var bid = event.target.id;
                 console.log("bid",bid);

                 swal({

                      title: "Are you sure?",
                      text: "To Accept this User!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                        swal("Congratulation your Request sent successfully to bidder", {
                          icon: "success",
                        })
                        .then((success) => {
                             var array = <?php echo $array_to_json; ?> ; 
                                // See it on the console
                                // console.log(array);
                                for(var i= 0; i < array.length; i++)
                                {
                                    if(array[i] != bid) {
                                       
                                        document.getElementById(array[i]).disabled = true;
                                    }
                                }  

                                // Call php function   
                                onSuccessSendMAil($bid,$email.$uname,$job);   
                        });
                     
                      } else {
                     
                        swal("OK Choose another Bidder");
                        
                      }
                });
            }
        </script>
    </body>
</html>