<?php
require_once '../backend/config.php';
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>TEK-UP - Online Course & Education</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="darkblue-skin">

        <div id="main-wrapper">	
			<?php
				if(!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true){

					echo'<div class="header header-light">
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
								
									<li class="active"><a href="#">Home<span class="submenu-indicator"></span></a></li>
									
									<li><a href="full-width-course.php">Courses</a></li>
									
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

				}else{
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
								
									<li class="active"><a href="index.php">Home<span class="submenu-indicator"></span></a></li>
									
									<li><a href="full-width-course.php">Courses</a></li>
									
									<li><a href="contact.php">Contact</a></li>
	
									<li><a href="about-us.php">About</a></li>
									
								</ul>
								
								<ul class="nav-menu nav-menu-social align-to-right">
									
									<li class="login_click light active">
										<a href="dashboard.php">Dashboard</a>
									</li>
									<li class="login_click theme-bg">
										<a href="login.php">Log Out</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>';
				}
			?>

			<div class="clearfix"></div>

			<div class="image-cover hero_banner hero-inner-2 shadow rlt" style="background:url(assets/img/75220624_2958815444132694_8750356843185831936_n.jpg) no-repeat;" data-overlay="7">
				<div class="container">
					
					<div class="hero-caption small_wd mb-5">
						<h1 class="big-header-capt cl_2 mb-0">Learn on your schedule</h1>
						<p>Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="banner-search shadow_high">
								<div class="search_hero_wrapping">
									<div class="row">
									
										<div class="col-lg-5 col-md-5 col-sm-12 br-right">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Keyword" />
													<img src="assets/img/search.svg" class="search-icon" alt="" />
												</div>
											</div>
										</div>
										
										<div class="col-lg-5 col-md-4 col-sm-12 small-pad">
											<div class="form-group">
												<div class="input-with-icon">
													<select id="c-category" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Web Designing</option>
														<option value="2">Development</option>
														<option value="3">Network</option>
														<option value="4">Security</option>
													</select>
													<img src="assets/img/pin.svg" class="search-icon" alt="" />
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12 pl-0">
											<div class="form-group none">
												<a href="#" class="btn search-btn full-width">Search</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="p-0 trips_top">
				<div class="container">
					<div class="trips_wrap">
						<div class="row m-0">
						
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="trips">
									<div class="trips_icons">
										<i class="ti-video-camera"></i>
									</div>
									<div class="trips_detail">
										<h4>100,000 online courses</h4>
										<p>Nor again is there anyone who loves or pursues or desires</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="trips">
									<div class="trips_icons">
										<i class="ti-medall"></i>
									</div>
									<div class="trips_detail">
										<h4>Expert instruction</h4>
										<p>Nam libero tempore, cum soluta and nobis est eligendi optio</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="trips none">
									<div class="trips_icons">
										<i class="ti-infinite"></i>
									</div>
									<div class="trips_detail">
										<h4>Lifetime access</h4>
										<p>These cases are perfectly simple and easy to distinguish</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section class="min-sec">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12 mb-3">
							<div class="sec-heading2">
								<div class="sec-left">
									<h3>Featured Courses</h3>
								</div>
								<div class="sec-right">
									<ul class="nav nav-tabs side-cates">
									  <li class="nav-item">
										<a class="nav-link active" href="javascript:void(0);">Design</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">Development</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">Network</a>
									  </li>
									  <li class="nav-item" href="javascript:void(0);">
										<a class="nav-link" href="javascript:void(0);">Security</a>
									  </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 p-0">

							<div class="arrow_slide three_slide arrow_middle">
			
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c1.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get CEH Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>8682 Views</li>
												<li><i class="ti-time mr-2"></i>6h 40min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>54 lectures</div>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c2.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get RedHat Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>9882 Views</li>
												<li><i class="ti-time mr-2"></i>6h 30min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>26 lectures</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c3.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get AWS Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>5893 Views</li>
												<li><i class="ti-time mr-2"></i>5h 15min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>52 lectures</div>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c4.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get OracleDB Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>5893 Views</li>
												<li><i class="ti-time mr-2"></i>5h 15min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.7 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>52 lectures</div>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c1.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get CEH Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>9857 Views</li>
												<li><i class="ti-time mr-2"></i>7h 45min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.9 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>32 lectures</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c2.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get RedHat Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>6852 Views</li>
												<li><i class="ti-time mr-2"></i>2h 30min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.8 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Yassine Karrech</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>48 lectures</div>
										</div>
									</div>	
								</div>
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="education_block_grid style_2">
										<div class="education_block_thumb n-shadow">
											<a href="course-detail.html"><img src="assets/img/c3.png" class="img-fluid" alt=""></a>
											<div class="cources_price">FREE</div>
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title"><a href="course-detail.html">Get AWS Certified, Grow Your Career</a></h4>
										</div>
										
										<div class="cources_info_style3">
											<ul>
												<li><i class="ti-eye mr-2"></i>8852 Views</li>
												<li><i class="ti-time mr-2"></i>3h 20min</li>
												<li><i class="ti-star text-warning mr-2"></i>4.9 Reviews</li>
											</ul>
										</div>
										
										<div class="education_block_footer">
											<div class="education_block_author">
												<div class="path-img"><a href="instructor-detail.html"><img src="assets/img/user.jpg" class="img-fluid" alt=""></a></div>
												<h5><a href="instructor-detail.html">Jasvinder Bhartiya</a></h5>
											</div>
											<div class="foot_lecture"><i class="ti-control-skip-forward mr-2"></i>42 lectures</div>
										</div>
										
									</div>	
								</div>
							
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Courcses End ================================== -->
			
			<!-- ============================ Featured Category Start ================================== -->
			<section class="bg-light">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12 mb-3">
							<div class="sec-heading2">
								<div class="sec-left">
									<h3>Got & Popular Categories</h3>
								</div>
								<div class="sec-right">
									<a href="full-width-course.php" class="btn-br-more">Browse More</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 p-0">

							<div class="arrow_slide three_slide-dots arrow_middle">
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="edu_cat">
										<div class="pic">
											<a class="pic-main" href="#" style="background-image:url(assets/img/course1.png);"></a>
										</div>
										<div class="edu_data">
											<h4 class="title"><a href="#">Security</a></h4>
											<ul class="meta">
												<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
												<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
											</ul>
										</div>
									</div>	
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="edu_cat">
										<div class="pic">
											<a class="pic-main" href="#" style="background-image:url(assets/img/course2.png);"></a>
										</div>
										<div class="edu_data">
											<h4 class="title"><a href="#">Network</a></h4>
											<ul class="meta">
												<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
												<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
											</ul>
										</div>
									</div>		
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="edu_cat">
										<div class="pic">
											<a class="pic-main" href="#" style="background-image:url(assets/img/course3.png);"></a>
										</div>
										<div class="edu_data">
											<h4 class="title"><a href="#">Development</a></h4>
											<ul class="meta">
												<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
												<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="edu_cat">
										<div class="pic">
											<a class="pic-main" href="#" style="background-image:url(assets/img/course4.png);"></a>
										</div>
										<div class="edu_data">
											<h4 class="title"><a href="#">Design</a></h4>
											<ul class="meta">
												<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
												<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
											</ul>
										</div>
									</div>		
								</div>
								
								<!-- Single Slide -->
								<div class="singles_items">
									<div class="edu_cat">
										<div class="pic">
											<a class="pic-main" href="#" style="background-image:url(assets/img/course5.png);"></a>
										</div>
										<div class="edu_data">
											<h4 class="title"><a href="#">Linux</a></h4>
											<ul class="meta">
												<li class="video"><i class="ti-video-clapper"></i>23 Videos</li>
												<li class="lessions"><i class="ti-book"></i>54 Lessions</li>
											</ul>
										</div>
									</div>
								</div>
							
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Category End ================================== -->
			
			<!-- ========================== Articles Section =============================== -->

			<!-- ========================== Articles Section =============================== -->
						
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

	</body>

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:52:49 GMT -->
</html>