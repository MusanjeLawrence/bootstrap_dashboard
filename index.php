<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Silverwood">
    <meta name="keywords" content="Silverwood,insurance,agent">
    <meta name="author" content="Silverwood insurance agent">
    <meta name="robots" content="noindex, nofollow">
    <title>Silverwood - Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/silver_small.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        

<div class="header">
	<!-- Logo -->
	<div class="header-left">
		<a href="index.php" class="logo">
			<img src="assets/img/silver_small.png" width="40" height="40" alt="">
		</a>
	</div>
	<!-- /Logo -->
	
	<a id="toggle_btn" href="javascript:void(0);">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	
	<!-- Header Title -->
	<div class="page-title-box">
		<h3>Silverwood Insurance Company</h3>
	</div>
	<!-- /Header Title -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
	
	<!-- Header Menu -->
	<ul class="nav user-menu">
	
		<!-- Search -->
		<li class="nav-item">
			<div class="top-nav-search">
				<a href="javascript:void(0);" class="responsive-search">
					<i class="fa fa-search"></i>
				</a>
				<form action="search.php">
					<input class="form-control" type="text" placeholder="Search here">
					<button class="btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</li>
		<!-- /Search -->
	
		
	
		<!-- Notifications -->
		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Notifications</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="activities.php">
								<div class="media">
									<span class="avatar">
										<img alt="" src="assets/img/profiles/Faith.jpeg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Faith</span> added new  <span class="noti-title"> Insurance claim</span></p>
										<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="activities.php">
								<div class="media">
									<span class="avatar">
										<img alt="" src="assets/img/profiles/frank.jpeg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Frank</span> changed the Username<span class="noti-title"></span></p>
										<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="activities.php">
								<div class="media">
									<span class="avatar">
										<img alt="" src="assets/img/profiles/avatar-06.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Lilian</span> added <span class="noti-title">another </span> proposal<span class="noti-title">Motor</span> Insurance<span class="noti-title">Policy</span></p>
										<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
					
						</li> -->
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="activities.php">View all Notifications</a>
				</div>
			</div>
		</li>
		<!-- /Notifications -->
		
		<!-- /Message Notifications -->

	

		<li class="nav-item dropdown has-arrow main-drop">
			
			<div class="dropdown-menu">
				<a class="dropdown-item" href="profile.php">My Profile</a>
				<a class="dropdown-item" href="settings.php">Settings</a>
				<a class="dropdown-item" href="logout.php">Logout</a>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="profile.php">My Profile</a>
			<a class="dropdown-item" href="settings.php">Settings</a>
			<a class="dropdown-item" href="login.php">Logout</a>
		</div>
	</div>
	<!-- /Mobile Menu -->
	
</div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php">Admin Dashboard</a></li>
									<li><a href="##">Client Dashboard</a></li>
								</ul>
							</li>
							
							<!-- <li class="menu-title"> 
								<span>Insurance policies</span>
							</li> -->
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-compass"></i> <span> Insurance policies</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="burglary.php">Burglary Insurance</a></li>
									<li><a href="contractors.php">Contractors Plant and Machinery Insurance</a></li>
									<li><a href="Prospectus.php">Prospectus Insurance</a></li>
									<li><a href="erection.php">Erection Insurance</a></li>
									<li><a href="all_risks.php">All Risks Insurance</a></li>

									<li><a href="##">Carries Liability Insurance</a></li>
									<li><a href="##">Terrorism Cover Insurnce</a></li>
									<li><a href="##">Motor Insurance</a></li>
									<li><a 	href="##">Private Car Insurance</a></li>
									<!-- <li><a href="timesheet.php">Timesheet</a></li>
									<li><a href="overtime.php">Overtime</a></li> -->
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="la la-rocket"></i> <span> Claims</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="##">Burglary Insurance claim</a></li>
								</ul>
							</li>
							
							<!-- <li class="menu-title"> 
								<span>HR</span>
							</li> -->
							<li class="submenu">
								<a href="#"><i class="la la-files-o"></i> <span> Quotes </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									
									<li><a href="##"> Britam</a></li>
								</ul>
							</li>
						
							
							<li> 
								<a href="##"><i class="la la-cogs"></i> <span>Settings</span></a>
							</li>
							<li> 
								<a href="##"><i class="la la-power-off"></i> <span>Logout</span></a>
							</li>
									
						</ul>
					</div>
                </div>
            </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                                <div class="dash-widget-info">
                                    <h3>12</h3>
                                    <span>Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                                <div class="dash-widget-info">
                                    <h3>40</h3>
                                    <span>Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                                <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="la la-edit"></i></span>
                                <div class="dash-widget-info">
                                    <h3>35</h3>
                                    <span>Proposals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body">
                                <span class="dash-widget-icon"><i class="la la-leanpub"></i></span>
                                <div class="dash-widget-info">
                                    <h3>12</h3>
                                    <span>Policies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/js/chart.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>
</html>

