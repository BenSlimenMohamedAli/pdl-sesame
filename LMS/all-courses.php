<?php
require_once '../backend/config.php';
if(!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/all-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:17 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>LearnUp - Online Course & Education HTML Template</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		<style>
			.circular--portrait { margin-left: 150px;position: relative; width: 110px; height: 110px;transform: scale(1.5); overflow: hidden; border-radius: 50%; } .circular--portrait img { width: 100%; height: auto; }
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
									<h4><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]; ?></h4>
									<span>
										<b>Role : </b>
										<?php 
										if($_SESSION["role"] == 0){
											echo "Student";
										}else{
											echo "Admin";
										}
										?>
								</div>
								</span>
								
								
								<div class="d-navigation">
									<ul id="side-menu">
										<li class="active"><a href="dashboard.php"><i class="ti-dashboard"></i>Dashboard</a></li>
										<li><a href="my-profile.php"><i class="ti-heart"></i>My Profile</a></li>
										<?php
											if($_SESSION['role'] == 1){
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
										
										<li><a href="#"><i class="ti-heart"></i>Saved Courses</a></li>
										<li class="dropdown">
											<a href="all-courses.php"><i class="ti-layers"></i>All Courses<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="all-courses.php">All</a></li>
												<li><a href="javascript:void(0);">Published</a></li>
												<li><a href="javascript:void(0);">Pending</a></li>
												<li><a href="javascript:void(0);">Expired</a></li>
												<li><a href="javascript:void(0);">In Draft</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="ti-shopping-cart"></i>My Order</a></li>
										<li><a href="settings.php"><i class="ti-settings"></i>Settings</a></li>
										<li><a href="#"><i class="ti-comment-alt"></i>Reviews</a></li>
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
											<li class="breadcrumb-item active" aria-current="page">All Courses</li>
										</ol>
									</nav>
								</div>
							</div>
							<!-- /Row -->
							
							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									
									<!-- Course Style 1 For Student -->
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
											<h4>All Courses</h4>
											</div>
											<div class="dashboard_fl_2">
												<ul class="mb0">
													<li class="list-inline-item">
														
													</li>
													<li class="list-inline-item">
														<form class="form-inline my-2 my-lg-0">
															<input class="form-control" type="search" placeholder="Search Courses" aria-label="Search">
															<button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
														</form>
													</li>
												</ul>
											</div>
										</div>
										<div class="dashboard_container_body">
											
											<!-- Single Course -->
											<div class="dashboard_single_course">
												<div class="dashboard_single_course_thumb">
													<img src="assets/img/c1.png" class="img-fluid" alt="" />
													<div class="dashboard_action">
														<a href="#" class="btn btn-ect">Edit</a>
														<a href="#" class="btn btn-ect">View</a>
													</div>
												</div>
												<div class="dashboard_single_course_caption">
													<div class="dashboard_single_course_head">
														<div class="dashboard_single_course_head_flex">
															<span class="dashboard_instructor">Adam Wilson</span>
															<h4 class="dashboard_course_title">Introduction Web Design with HTML</h4>
															<div class="dashboard_rats">
																<div class="dashboard_rating">
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star"></i>
																</div>
																<span>(40 Reviews)</span>
															</div>
														</div>
														<div class="dc_head_right">
															<h4 class="dc_price_rate theme-cl">$00.00</h4>
														</div>
													</div>
													<div class="dashboard_single_course_des">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="dashboard_single_course_progress">
														<div class="dashboard_single_course_progress_1">
															<label>82% Completed</label>
															<div class="progress">
																<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="dashboard_single_course_progress_2">
															<ul class="m-0">
																<li class="list-inline-item"><i class="ti-user mr-1"></i>4512 Enrolled</li>
																<li class="list-inline-item"><i class="ti-comment-alt mr-1"></i>112 Comments</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Course -->
											<div class="dashboard_single_course">
												<div class="dashboard_single_course_thumb">
													<img src="assets/img/c2.png" class="img-fluid" alt="" />
													<div class="dashboard_action">
														<a href="#" class="btn btn-ect">Edit</a>
														<a href="#" class="btn btn-ect">View</a>
													</div>
												</div>
												<div class="dashboard_single_course_caption">
													<div class="dashboard_single_course_head">
														<div class="dashboard_single_course_head_flex">
															<span class="dashboard_instructor">Shaurya Preet</span>
															<h4 class="dashboard_course_title">Introduction Full About Advance PHP</h4>
															<div class="dashboard_rats">
																<div class="dashboard_rating">
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star"></i>
																</div>
																<span>(44 Reviews)</span>
															</div>
														</div>
														<div class="dc_head_right">
															<h4 class="dc_price_rate theme-cl">$00.00</h4>
														</div>
													</div>
													<div class="dashboard_single_course_des">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="dashboard_single_course_progress">
														<div class="dashboard_single_course_progress_1">
															<label>90% Completed</label>
															<div class="progress">
																<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="dashboard_single_course_progress_2">
															<ul class="m-0">
																<li class="list-inline-item"><i class="ti-user mr-1"></i>5412 Enrolled</li>
																<li class="list-inline-item"><i class="ti-comment-alt mr-1"></i>72 Comments</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Course -->
											<div class="dashboard_single_course">
												<div class="dashboard_single_course_thumb">
													<img src="assets/img/c3.png" class="img-fluid" alt="" />
													<div class="dashboard_action">
														<a href="#" class="btn btn-ect">Edit</a>
														<a href="#" class="btn btn-ect">View</a>
													</div>
												</div>
												<div class="dashboard_single_course_caption">
													<div class="dashboard_single_course_head">
														<div class="dashboard_single_course_head_flex">
															<span class="dashboard_instructor">Krish Wilson</span>
															<h4 class="dashboard_course_title">Full WordPress Development Package</h4>
															<div class="dashboard_rats">
																<div class="dashboard_rating">
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star"></i>
																</div>
																<span>(57 Reviews)</span>
															</div>
														</div>
														<div class="dc_head_right">
															<h4 class="dc_price_rate theme-cl">$00.00</h4>
														</div>
													</div>
													<div class="dashboard_single_course_des">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="dashboard_single_course_progress">
														<div class="dashboard_single_course_progress_1">
															<label>95% Completed</label>
															<div class="progress">
																<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="dashboard_single_course_progress_2">
															<ul class="m-0">
																<li class="list-inline-item"><i class="ti-user mr-1"></i>6587 Enrolled</li>
																<li class="list-inline-item"><i class="ti-comment-alt mr-1"></i>365 Comments</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single Course -->
											<div class="dashboard_single_course">
												<div class="dashboard_single_course_thumb">
													<img src="assets/img/c4.png" class="img-fluid" alt="" />
													<div class="dashboard_action">
														<a href="#" class="btn btn-ect">Edit</a>
														<a href="#" class="btn btn-ect">View</a>
													</div>
												</div>
												<div class="dashboard_single_course_caption">
													<div class="dashboard_single_course_head">
														<div class="dashboard_single_course_head_flex">
															<span class="dashboard_instructor">Adam Wilson</span>
															<h4 class="dashboard_course_title">Introduction Magento Advance Code</h4>
															<div class="dashboard_rats">
																<div class="dashboard_rating">
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star filled"></i>
																	<i class="ti-star"></i>
																</div>
																<span>(30 Reviews)</span>
															</div>
														</div>
														<div class="dc_head_right">
															<h4 class="dc_price_rate theme-cl">$00.00</h4>
														</div>
													</div>
													<div class="dashboard_single_course_des">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="dashboard_single_course_progress">
														<div class="dashboard_single_course_progress_1">
															<label>70% Completed</label>
															<div class="progress">
																<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<div class="dashboard_single_course_progress_2">
															<ul class="m-0">
																<li class="list-inline-item"><i class="ti-user mr-1"></i>6582 Enrolled</li>
																<li class="list-inline-item"><i class="ti-comment-alt mr-1"></i>65 Comments</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											
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
		<script src="assets/js/metisMenu.min.js"></script>	
		<script>
			$('#side-menu').metisMenu();
		</script>

	</body>

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/all-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:17 GMT -->
</html>