<?php
require_once '../backend/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/full-width-course.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:14 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="www.frebsite.nl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>SESAME - Online Course & Education</title>

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">

	<!-- Custom Color Option -->
	<link href="assets/css/colors.css" rel="stylesheet">

</head>

<body class="darkblue-skin">


	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<?php
		if (!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true) {

			echo '<div class="header header-light">
					<div class="container">
						<nav id="navigation" class="navigation navigation-landscape">
							<div class="nav-header">
								<a class="nav-brand" href="#">
									<img src="assets/img/logo-header.png" class="logo" alt="" />
								</a>
								<div class="nav-toggle"></div>
							</div>
							<div class="nav-menus-wrapper" style="transition-property: none;">
								<ul class="nav-menu">
								
									<li><a href="index.php">Home<span class="submenu-indicator"></span></a></li>
									
									<li class="active"><a href="full-width-course.php">Courses</a></li>
									
									<li><a href="contact.php">Contact</a></li>
	
									<li><a href="about-us.php">About</a></li>
									
								</ul>
								
								<ul class="nav-menu nav-menu-social align-to-right">
									
									<li class="login_click light">
										<a href="login.php">Sign in</a>
									</li>
									<li class="login_click theme-bg">
										<a href="register.php">Sign up</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
	';
		} else {
			echo '<div class="header header-light">
					<div class="container">
						<nav id="navigation" class="navigation navigation-landscape">
							<div class="nav-header">
								<a class="nav-brand" href="#">
									<img src="assets/img/logo-header.png" class="logo" alt="" />
								</a>
								<div class="nav-toggle"></div>
							</div>
							<div class="nav-menus-wrapper" style="transition-property: none;">
								<ul class="nav-menu">
								
									<li><a href="index.php">Home<span class="submenu-indicator"></span></a></li>
									
									<li class="active"><a href="full-width-course.php">Courses</a></li>
									
									<li><a href="contact.php">Contact</a></li>
	
									<li><a href="about-us.php">About</a></li>
									
								</ul>
								
								<ul class="nav-menu nav-menu-social align-to-right">
									
									<li class="login_click light active">
										<a href="dashboard.php">Dashboard</a>
									</li>
									<li class="login_click theme-bg">
										<a href="../backend/userController/logoutUser.php">Log Out</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>';
		}
		?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

		<!-- ============================ Page Title Start================================== -->
		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<div class="breadcrumbs-wrap">
							<h1 class="breadcrumb-title">Our Courses</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Our Courses</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Page Title End ================================== -->


		<!-- ============================ Full Width Courses  ================================== -->
		<section class="pt-0">
			<div class="container">

				<!-- Onclick Sidebar -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div id="filter-sidebar" class="filter-sidebar">
							<div class="filt-head">
								<h4 class="filt-first">Advance Options</h4>
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close <i class="ti-close"></i></a>
							</div>
							<div class="show-hide-sidebar">

								<!-- Find New Property -->
								<div class="sidebar-widgets">

									<!-- Search Form -->
									<form method="POST" action="category-course.php">



										<h4 class="side_title">Course categories</h4>
										<ul class="no-ul-list mb-3">
											<li>
												<input id="a-4" class="checkbox-custom" name="r" type="radio" value="development">
												<label for="a-4" class="checkbox-custom-label">Development</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" name="r" type="radio" value="security">
												<label for="a-5" class="checkbox-custom-label">Security</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="r" type="radio" value="networking">
												<label for="a-6" class="checkbox-custom-label">Networking</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="r" type="radio" value="soft-skills">
												<label for="a-7" class="checkbox-custom-label">Soft Skills</label>
											</li>

										</ul>

										<!--<h4 class="side_title">Instructors</h4>
										<ul class="no-ul-list mb-3">
											<li>
												<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Ghaith Zghidi (14)</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Ghaith Zghidi (11)</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Hakim Mahmoud (4)</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Hanine Bousetta (7)</label>
											</li>
											<li>
												<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
												<label for="a-8" class="checkbox-custom-label">Yosra Wannen</label>
											</li>
										</ul>-->

										<input type="submit" value="Filter Result" class="btn btn-theme full-width mb-2">
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Row -->
				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">

						<!-- Row -->
						<div class="row align-items-center mb-3">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<?php
								require_once '../backend/courseController/showCourses.php';
								$count = $query->rowCount();
								echo 'We found <strong>' . $count . '</strong> courses for you'
								?>

							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 ordering">
								<div class="filter_wraps">
									<div class="dl">
										<div id="main2">
											<a href="javascript:void(0)" class="btn btn-theme arrow-btn filter_open" onclick="openNav()" id="open2">Show Filter<span><i class="fas fa-arrow-alt-circle-right"></i></span></a>
										</div>
									</div>

								</div>
							</div>
						</div>
						<!-- /Row -->

						<div class="row">
							<?php
							while ($result = $query->fetch()) {
								echo '<div class="col-lg-4 col-md-6">
								<div class="education_block_grid">
									
									<div class="education_block_thumb">
										<a href="#"><img src="../backend/courseController/images/' . $result['image'] . '" width="370" height="217"  alt=""></a>
										<div class="cources_price">FREE</div>';
								if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
									echo '<div class="education_ratting"><a href="login.php">Login to watch</a></div>';
								} else {
									echo '<div class="education_ratting"><a href="vedio-play.php?vedio='.$result['video'].'" target="_blank">Watch Course</a></div>';
								}

								echo '</div>
									
									<div class="education_block_body">
										<h3 class="bl-title">' . $result['course_title'] . '</h3>
										<p>' . $result['course_description'] . '</p>
										
									</div>
									
									<div class="education_block_footer">
										<div class="education_block_author">
											<div class="path-img"><a href="#"><img src="" class="img-fluid" alt=""></a></div>
											<h4><i class="ti-briefcase"></h4></i><h5>&nbsp&nbsp&nbsp&nbsp' . $result['course_owner'] . '</h5>
										</div>
										<span class="education_block_time"><i class="ti-time mr-1"></i>' . $result['course_duration'] . ' Min</span>
									</div>
									
								</div>	
							</div>';
							}


							?>
						</div>

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">

								<!-- Pagination -->
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 text-center">
										<button type="button" class="btn btn-loader">Load More<i class="ti-reload ml-3"></i></button>
									</div>
								</div>

							</div>
						</div>
						<!-- /Row -->

					</div>

				</div>
				<!-- Row -->

			</div>
		</section>
		<!-- ============================ Full Width Courses End ================================== -->

		<!-- ============================== Start Newsletter ================================== -->
		<section class="bg-cover newsletter inverse-theme" style="background:url(assets/img/75220624_2958815444132694_8750356843185831936_n.jpg);" data-overlay="9">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-8 col-sm-12">
						<div class="text-center">
							<h2>Join Thousand of Happy Students!</h2>
							<p>Subscribe our newsletter & get latest news and updation!</p>
							<form class="sup-form">
								<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
								<input type="submit" class="btn btn-theme" value="Get Started">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================================= End Newsletter =============================== -->

		<!-- ============================ Footer Start ================================== -->
		<footer class="light-footer">
			<div>
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3">
							<div class="footer-widget">
								<img src="assets/img/logo-header.png" class="img-fluid" alt="" />
							</div>
						</div>
						<div class="col-lg-3 col-md-12">
							<div class="footer-widget">
								<div class="footer-add">
									<p>Z.I Chotrana II Pôle Technologique Elgazala
										2088 Ariana, Tunisie.</p>
									<p>+216 12-345-678</p>
									<p>info@sesame.com.tn</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-12">
							<div class="footer-widget">
								<h4 class="widget-title">Navigations</h4>
								<ul class="footer-menu">
									<li><a href="about-us.php">About Us</a></li>
									<li><a href="faq.html">FAQs Page</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-12">
							<div class="footer-widget">
								<h4 class="widget-title">Download Apps</h4>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="lni-playstore theme-cl"></i>
										</div>
										<div class="os-app-caps">
											Google Play
											<span>Get It Now</span>
										</div>
									</div>
								</a>
								<a href="#" class="other-store-link">
									<div class="other-store-app">
										<div class="os-app-icon">
											<i class="lni-apple theme-cl"></i>
										</div>
										<div class="os-app-caps">
											App Store
											<span>Now it Available</span>
										</div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-6 col-md-6">
							<p class="mb-0">© 2022 sesame LMS. Designd By <a href="">SESAMEERZ</a>.</p>
						</div>

						<div class="col-lg-6 col-md-6 text-right">
							<ul class="footer-bottom-social">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
								<li><a href="#"><i class="ti-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</footer>
		<!-- ============================ Footer End ================================== -->




		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/counterup.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<script>
		function openNav() {
			document.getElementById("filter-sidebar").style.width = "320px";
		}

		function closeNav() {
			document.getElementById("filter-sidebar").style.width = "0";
		}

	</script>


</body>

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/full-width-course.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:14 GMT -->

</html>