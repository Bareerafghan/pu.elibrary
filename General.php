<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
	<meta content="Baitullah Bareer" name="author">

<!-- Title -->
	<title>PU E-library</title>

	<!-- Favicon -->
	<link href="Image/logo_paktia.png" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- PU E-library CSS -->
	<link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

	<!-- Tabs CSS -->
	<link href="assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">

	<!-- jvectormap CSS -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

	<!-- Custom scroll bar css-->
	<link href="assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

</head>
<body>
	<div id="global-loader" ></div>
	<div class="page">
		<div class="page-main">
			<!-- Sidebar menu-->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar ">
				<div >
					<img style="padding: 0;" alt="..." class="data-toggle mb-0 container-fluid" src="Image/sidebarlogo.png">
				</div>
					<ul class="side-menu">
						
						<li class="slide">
			<a class="side-menu__item"  href="Books.php"><span class="side-menu__label"> Books </span><i class="angle fa fa-angle-right"></i></a>
							</li>
							
							<li class="slide">
			<a class="side-menu__item"  href="Monographs.php"><span class="side-menu__label">Monographs</span><i class="angle fa fa-angle-right"></i></a>
							</li>

<li class="slide">
<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Articles/Papers</span><i class="angle fa fa-angle-right"></i></a>
<ul class="slide-menu">
			<li>
		<a href="International-articles.php" class="slide-item">International</a>
								</li>
								<li>
		<a href="Local-articles.php" class="slide-item">Local</a>
								</li>
							</ul>
						</li>

							<li class="slide">
	<a class="side-menu__item" href="Magazines.php"><span class="side-menu__label">Magazines</span><i class="angle fa fa-angle-right"></i></a>
							</li>

							
						<li class="slide">
	<a class="side-menu__item"  href="Conferences.php"><span class="side-menu__label">Conferences</span><i class="angle fa fa-angle-right"></i></a>
							
						</li>
						
						<li class="slide">
   <a class="side-menu__item"  href="gallery.php"><span class="side-menu__label">Images</span><i class="angle fa fa-angle-right"></i></a>
								
						</li>
						<li class="slide">
	<a class="side-menu__item"  href="#"><span class="side-menu__label">Videos</span><i class="angle fa fa-angle-right"></i></a>
							
						</li>

						<li class="slide">
	<a class="side-menu__item" href="login.php"><span class="side-menu__label">Login</span><i class="angle fa fa-angle-right"></i></a>
							
						</li>
						<li class="slide">
	<a class="side-menu__item"  href="aboutme.php"><span class="side-menu__label">About Me</span><i class="angle fa fa-angle-right"></i></a>
						</li>
						<li>
	<a class="side-menu__item" href="#"><span class="side-menu__label">Help & Support</span><i class="angle fa fa-angle-right"></i></a>
						</li>
					</ul>
				</div>
			</aside>
			<!-- Sidebar menu-->

			<!-- app-content-->
			<div class="app-content ">
				<div class="side-app">
					<div class="main-content">
						<div class="p-2 d-block d-sm-none navbar-sm-search">
							<!-- Form -->
							
						</div>
						<!-- Top navbar -->
<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
							<div class="container-fluid">
<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

								<!-- Horizontal Navbar -->

								<!-- Brand -->
								
								<!-- Form -->
<form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
	<div class="form-group mb-0">
	<div class="input-group input-group-alternative">
	<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-search"></i></span>
</div><input class="form-control" placeholder="Search" type="text">
										</div>

 <div class="form-group mb-0">
 	<div class="input-group input-group-alternative">
	<div class="input-group-prepend">
	<span class="input-group-text"><i class=" fas fa-file "></i></span>
	<select name="Search" class="form-control custom-select container-fluid" >
		<option value="" selected disabled hidden > Search type </option>
		<option value="Books" > Books </option>
		<option value="Monographs" >Monographs</option>
		<option value="Articles" >Articles</option>
		<option value="Magazines" >Magazines</option>
		<option value="Conferences" >Conferences</option>
		</select>
		</div> </div> </div>

									</div>
								</form>
			<!-- ------------------ User,,,,,,,,,,,,,,,,,, -->
<ul class="navbar-nav align-items-center ">
<li class="nav-item d-none d-md-flex">
<div class="dropdown d-none d-md-flex mt-2 ">
<a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
<div class="media-body ml-2 d-none d-lg-block">
<span class="mb-0 ">Full Screen</span>
											</div>
										</div>
									</li>
									

								</ul>
							</div>
						</nav>
						

						</div> </div>

<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- E-library Scripts -->
	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Echarts JS -->
	<script src="assets/plugins/chart-echarts/echarts.js"></script>

	<!-- Fullside-menu Js-->
	<script src="assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

	<!-- Custom scroll bar Js-->
	<script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- peitychart -->
	<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="assets/plugins/peitychart/peitychart.init.js"></script>

	<!-- Vector Plugin -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/gdp-data.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
	<script src="assets/js/dashboard2map.js"></script>

	<!-- Elibrary JS -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/dashboard-sales.js"></script>


					</body>



</html>