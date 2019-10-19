<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Squad 8 | Aplikasi Pendaftaran PKL</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/morris/morris.css') }}" />

		<!-- Theme<span class="separator"></span> CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="{{ url('3.jpeg') }}" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

			
				<!-- start: search & user box -->
				<div class="header-right">
					<span class="separator"></span>
					
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<!-- <figure class="profile-picture">
								<img src="../avatar5.png" alt="Joseph Doe" class="img-circle" data-lock-picture="new_logo.png" />
							</figure> -->
							<span class="glyphicon glyphicon-user"> 
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"> Admin </span>
							<!-- 	<span class="role">admin</span> -->
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li> -->
								
								<li>
									<a role="menuitem" tabindex="-1" href="/keluar1"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="/indexx">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Manajement Data Siswa</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ route('admin.bacadatasiswa') }}">
													 Data Master Siswa
												</a>
											</li>
											<li>
												<a href="/admin/calon">
													 Data Calon PKL
												</a>
											</li>
											
											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Manajemen Data Pembimbing</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ route('admin.bacadatapembimbinggg') }}">
													 Pembimbing PKL
												</a>
											</li>
											<li>
												<a href="{{ route('admin.bacadatakaryatulis') }}">
													 Pembimbing Karya Tulis
												</a>
											</li>
											
											
										</ul>
									</li>
									<li>
												<a href="{{ route('admin.kelas') }}">
													<i class="fa fa-lock" aria-hidden="true"></i>
											<span>Kelas</span> 
												</a>
											</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Siswa PKL</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="/admin/SiswaPKL/RPL1">
													 XI RPL 1
												</a>
											</li>
											<li>
												<a href="/admin/SiswaPKL/RPL2">
													XI RPL 2 
												</a>
											</li>
											<li>
												<a href="/admin/SiswaPKL/TKJ1">
													XII TKJ 1
												</a>
											</li>
											<li>
												<a href="/admin/SiswaPKL/TKJ2">
													XII TKJ 2
												</a>
											</li>
										</ul>
									</li>
									
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Pendaftaran PKL</h2>
					
						<div class="right-wrapper pull-right">
							
					
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						@yield('row')
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-appear/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
		<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
		<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
		<script src="{{ asset('assets/vendor/morris/morris.js') }}"></script>
		<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
		<script src="{{ asset('assets/vendor/snap-svg/snap.svg.js') }}"></script>
		<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
		<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{ asset('assets/javascripts/dashboard/examples.dashboard.js') }}"></script>
	</body>
</html>