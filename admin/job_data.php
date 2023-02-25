
<?php session_start(); include('session.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hesta Job Seeker Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/dashboard.css" rel='stylesheet' type='text/css'/>
        <link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    </head>
    <body>
        <?php include('connection.php');?>
        <?php include('header/header1.php');

            if(isset($_GET['jobid']) && !empty($_GET['jobid'])){

                $url = $_GET['jobid'];
                    
            } else {
                  
                echo "id not Found";
            }
                $sqld ="DELETE FROM `job_detail` WHERE `job_detail_id`='$url'";
                $result1 = mysqli_query($conn,$sqld);

        ?>
        <div class="container" id="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h2><u><b>jobs Data</b></u></h2></center>
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>title of Job</th>
                                <th>About Job</th>
                                <th>Types of Job</th>
                                <th>Job Location</th>
                                <th>Budget</th>
                                <th>Expery Date</th>
                                <th>Manage Account</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                  
                                $sql = "SELECT job_detail.job_detail_id,
                                job_detail.job_title,job_detail.job_description,job_detail.job_type,job_detail.job_address,job_detail.job_budget,job_detail.job_exp,job_detail.u_id,user.u_name FROM job_detail INNER JOIN user ON user.u_id = job_detail.u_id";
                                $result = mysqli_query($conn,$sql);
                                
                                while($rows = mysqli_fetch_array($result)) {

                                    $jobid = $rows['job_detail_id'];
                                                                           
                            ?>  
                            <tr>
                                <td><?php echo $rows['u_name'];?></td>
                                <td><?php echo $rows['job_title'];?></td>
                                <td><?php echo $rows['job_description'];?></td>
                                <td><?php echo $rows['job_type'];?></td>
                                <td><?php echo $rows['job_address'];?></td>
                                <td><?php echo $rows['job_budget'];?></td>
                                <td><?php echo $rows['job_exp'];?></td>
                                <td><button class="btn btn-info btn-lg"><a href="job_data.php?jobid=<?php echo $jobid;?>">Delete</a></button></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="copyrights"><p>There’s just one more thing you might want to think about.<a href="http://www.hestabit.com">Hestabit</a></div>
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script src="js/amcharts.js"></script>
        <script src="js/serial.js"></script>
        <script src="js/export.js"></script>    
        <script src="js/light.js"></script>
        <script src="js/chart1.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
        <script type="text/javascript" src="js/circles.js"></script>
        <script src="js/skycons.js"></script>
        <script>
            var icons = new Skycons({"color": "#fcb216"}),
                list  = ["partly-cloudy-day"],i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
        </script>
        <script src="js/screenfull.js"></script>
        <script>
            $(function () {
                $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
                    if (!screenfull.enabled) {
                    return false;
                    }
                    $('#toggle').click(function () {
                    screenfull.toggle($('#container')[0]);
                    }); 
            });
        </script>
        <script src="js/flipclock.js"></script>
        <script type="text/javascript">
            var clock;
            
            $(document).ready(function() {
                
                clock = $('.clock').FlipClock({
                    clockFace: 'HourlyCounter'
                });
            });
        </script>
        <script src="js/bars.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>









