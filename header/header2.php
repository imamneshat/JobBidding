
 <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" style="position: fixed;">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body"><img src="img/icons/New.png" style="height :50px; margin-top: -15px;" alt=""/></a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a onclick="location.href = 'index.php#body';">Home</a></li>
                        <li><a onclick="location.href = 'index.php#testimonials';">About Us</a></li>
                        <li><a onclick="location.href = 'index.php#service';">Jobs</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Jobs<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a onclick="location.href = 'poster_joblist.php';">My Jobs List</a></li>
                                <li><a onclick="location.href='jobpost.php';">Post Job</a></li>
                                <li><a onclick="location.href='bidd.php';">My Bidds</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">    
                                <li><a onclick="location.href='admin/admin.php';">Admin</a></li>
                                <li><a onclick="location.href = 'index.php#contact';">Contact</a></li>  
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/icons/myp.png" style="width: 30px; margin-top: -10px;"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a onclick="location.href='profile.php';">My Profile</a></li>
                                <li><a onclick="location.href='dashboard.php';">My Dashboard</a></li>
                                <li id="logout"><a onclick="location.href='logout.php';">Log out</a></li>
                            </ul>
                        </li>             
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->