
 
<div class="w3_agileits_top_nav">
	<ul id="gn-menu" class="gn-menu-main">
		<li class="gn-trigger">
			<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
			<nav class="gn-menu-wrapper">
				<div class="gn-scroller scrollbar1">
					<ul class="gn-menu agile_menu_drop">
						<li><a href="main-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
						<li>
							<a onclick="location.href = '../index.php#body';"><i class="fa fa-home" aria-hidden="true"></i>Home<i class="fa fa-angle-down" aria-hidden="true"></i></a> 
							<ul class="gn-submenu">
								<li class="mini_list_agile"><a onclick="location.href = '../index.php#testimonials';"><i class="fa fa-caret-right" aria-hidden="true"></i> About</a></li>
								
								<li class="mini_list_agile"><a onclick="location.href = '../index.php#contact';"> <i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>

								<li class="mini_list_w3"><a onclick="location.href = '../index.php#service';"> <i class="fa fa-briefcase" aria-hidden="true"></i>Jobs</a></li>
							</ul>
						</li>
						<li class="page">
							<a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i> Admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								 <ul class="gn-submenu">
							  
							   <li class="mini_list_agile"><a href="signup.php"> <i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</a></li>
							   <li class="mini_list_w3"><a href="signout.php"> <i class="fa fa-sign-out"></i> Sgin out</a> </li>
							</ul>
						</li>
					</ul>
				</div><!-- /gn-scroller -->
			</nav>
		</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php session_start();echo "\t".$_SESSION['login_user']." "; ?></a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile"></ul>
					</li>
				<li class="second top_bell_nav">
				   
				</li>
				<li class="second top_bell_nav"></li>
				<li class="second top_bell_nav"></li>
				<li class="second w3l_search"></li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>
			</ul>
			<!-- //nav -->
		</div>	
		</div>
			</section>
			<!-- <li><a onclick="location.href = '../index.php#body';">Home</a></li> -->
		
	</ul>
</div>