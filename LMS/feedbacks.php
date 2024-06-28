<?php
require_once '../backend/config.php';
require_once '../backend/contactController/showContacts.php';
if(!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true){
	header('Location: login.php');
}else if($_SESSION['role'] != 1){
  session_destroy();
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:24 GMT -->
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
	
    <body class="dqrkblue-skin">
	
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
									
									<li class="active"><a href="contact.php">Contact</a></li>
	
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
		
           <!-- ============================ Page Title Start================================== -->
		   
		   <section class="page-title"> 
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Received Feedbacks</h1>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="bg-light">
			
				<div style="margin-left: 550px"class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-8 col-md-7">

							<?php
							
							if($query->rowCount() > 0){
								while($result = $query->fetch()){
									echo'
									<form method="POST" action="../backend/contactController/deleteContact.php?id='.$result['contact_id'].'">
									<div class="prc_wrap">
										
										<div class="prc_wrap_header">
											<h4 class="property_block_title">Fillup The Form</h4>
										</div>
										
										<div class="prc_wrap-body">
										
											<div class="row">
												
												<div class="col-lg-6 col-md-12">
													
													<div class="form-group">
														<label>Name</label>
														<input type="text" name="name" class="form-control simple" value="'.$result['name'].'"  disabled>
													</div>
												</div>
												<div class="col-lg-6 col-md-12">
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control simple" value="'.$result['email'].'" disabled>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label>Subject</label>
												<input type="text" name="subject" class="form-control simple" value="'.$result['subject'].'" disabled>
											</div>
											
											<div class="form-group">
												<label>Message</label>
												<textarea name="message" class="form-control simple" disabled>'.$result['message'].'</textarea>
											</div>
											
											<div class="form-group">
												<input type="submit" value="Done Reading" class="btn btn-theme">
											</div>
										</div>
										
									</div>
									<br><br>
									</form>';
								}
							}else{
								echo '<div class="alert alert-dark" role="alert">
								There is no new feedbacks.
							  </div>';
							}
								
							?>
											
						</div>
						
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
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

	</body>

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:24 GMT -->
</html>