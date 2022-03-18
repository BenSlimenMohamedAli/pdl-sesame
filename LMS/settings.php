<?php
require_once '../backend/config.php';
if (!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true) {
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:17 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="www.frebsite.nl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>TEK-UP - Online Course & Education</title>

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">

	<!-- Custom Color Option -->
	<link href="assets/css/colors.css" rel="stylesheet">
	<style>
		.circular--portrait {
			margin-left: 150px;
			position: relative;
			width: 110px;
			height: 110px;
			transform: scale(1.5);
			overflow: hidden;
			border-radius: 50%;
		}

		.circular--portrait img {
			width: 100%;
			height: auto;
		}
	</style>
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
		<div class="header header-light">
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

							<li><a href="full-width-course.php">Courses</a></li>

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
		</div>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Dashboard: My Order Start ================================== -->
		<section class="gray pt-5">
			<div class="container-fluid">

				<div class="row">

					<div class="col-lg-3 col-md-3">
						<div class="dashboard-navbar">
							<br>
							<div class="circular--portrait">
								<img src="../backend/userController/images/<?php echo $_SESSION['image']; ?>" class="img-fluid avater" alt="">
							</div>
							<br>
							<div class="d-user-avater">
								<h4><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?></h4>
								<span>
									<b>Role : </b>
									<?php
									if ($_SESSION["role"] == 0) {
										echo "Student";
									} else {
										echo "Admin";
									}
									?>
							</div>
							</span>


							<div class="d-navigation">
								<ul id="side-menu">
									<li><a href="dashboard.php"><i class="ti-dashboard"></i>Dashboard</a></li>
									<li><a href="my-profile.php"><i class="ti-heart"></i>My Profile</a></li>
									<?php
									if ($_SESSION['role'] == 1) {
										echo '<li class="dropdown">';
										echo '<a href="#"><i class="ti-user"></i>Admin<span class="ti-angle-left"></span></a>';
										echo '<ul class="nav nav-second-level">';
										echo '<li><a href="add-course.php"><i class="ti-plus"></i>Add Course</a></li>';
										echo '<li><a href="update-course.php"><i class="ti-eraser"></i>Update Course</a></li>';
										echo '<li><a href="delete-course.php"><i class="ti-trash"></i>Delete Course</a></li>';
										echo '<li><a href="feedbacks.php"><i class="ti-microphone"></i>Feedbacks</a></li>';


										echo '</ul>';
										echo '</li>';
									}
									?>

									<li><a href="saved-courses.html"><i class="ti-heart"></i>Saved Courses</a></li>
									<li class="dropdown">

										<ul class="nav nav-second-level">
											<li><a href="all-courses.html">All</a></li>
											<li><a href="javascript:void(0);">Published</a></li>
											<li><a href="javascript:void(0);">Pending</a></li>
											<li><a href="javascript:void(0);">Expired</a></li>
											<li><a href="javascript:void(0);">In Draft</a></li>
										</ul>
									</li>
									<li><a href="my-order.html"><i class="ti-shopping-cart"></i>My Order</a></li>
									<li class="active"><a href="settings.php"><i class="ti-settings"></i>Settings</a></li>
									<li><a href="reviews.html"><i class="ti-comment-alt"></i>Reviews</a></li>
									<li><a href="../backend/userController/logoutUser.php"><i class="ti-power-off"></i>Log Out</a></li>
								</ul>
							</div>

						</div>


					</div>

					<div class="col-lg-9 col-md-9 col-sm-12">

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Settings</li>
									</ol>
								</nav>
							</div>
						</div>
						<!-- /Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="dashboard_container">
									<div class="dashboard_container_header">
										<div class="dashboard_fl_1">
											<h4>Setup Your Detail</h4>
										</div>
									</div>
									<form action="../backend/userController/updateUser.php" method="POST" enctype="multipart/form-data">
										<div class="dashboard_container_body p-4">
											<!-- Basic info -->
											<div class="submit-section">
												<div class="form-row">

													<div class="form-group col-md-6">
														<label>Your Firstname</label>
														<?php
														echo '<input type="text" name="firstname" class="form-control" value="' . $_SESSION['firstname'] . '">';
														?>
													</div>



													<div class="form-group col-md-6">
														<label>Your Lastname</label>
														<?php
														echo '<input type="text" name="lastname" class="form-control" value="' . $_SESSION['lastname'] . '">';
														?>
													</div>

													<div class="form-group col-md-6">
														<label>Email</label>
														<?php
														echo '<input type="email" name="email" class="form-control" value="' . $_SESSION['email'] . '">';
														?>
													</div>

													<div class="form-group col-md-6">
														<label>Phone</label>
														<?php
														echo '<input type="text" name="phone" class="form-control" value="' . $_SESSION['phone'] . '">';
														?>
													</div>

													<div class="form-group col-md-6">
														<label>Image</label>
														<input type="file" name="image" class="form-control" name="img">
													</div>



												</div>
											</div>
											<!-- Basic info -->

											<!-- Social Account info -->
											<div class="form-submit">

												<div class="submit-section">
													<div class="form-row">



														<div class="form-group col-lg-12 col-md-12">
															<button class="btn btn-theme" type="submit">Save Changes</button>
														</div>

													</div>
												</div>
											</div>

											<!-- / Social Account info -->

										</div>
									</form>

								</div>
							</div>
						</div>
						<!-- /Row -->

					</div>

				</div>
				<!-- Row -->

			</div>
		</section>
		<!-- ============================ Dashboard: My Order Start End ================================== -->

		<!-- ============================== Start Newsletter ================================== -->
		<!-- <section class="newsletter theme-bg inverse-theme">
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
			</section> -->
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
									<p>info@Tek-up.de</p>
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
							<p class="mb-0">© 2022 Tek-up LMS. Designd By <a href="">TEKUPERZ</a>.</p>
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
	<script src="assets/js/metisMenu.min.js"></script>
	<script>
		$('#side-menu').metisMenu();
	</script>

</body>

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:17 GMT -->

</html>