<?php
require_once '../backend/config.php';
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:52 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>TEK-UP - Online Course & Education</title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="log-bg">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ========================== SignUp Elements ============================= -->
			<section class="log-space">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-11">
						
							<div class="row no-gutters position-relative log_rads">
								<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(assets/img/log.png)no-repeat;">
									<div class="lui_9okt6">
										<div class="_loh_revu97">
											<div id="reviews-login">
											
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Good Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Shilpa D. Setty</h4>
														<span>Team Leader</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Good Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Adam Wilsom</h4>
														<span>Mak Founder</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Customer Support</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Kunal M. Wilsom</h4>
														<span>CEO & Founder</span>
													</div>												
												</div>
												
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Ultimate Services</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Mark Jugermark</h4>
														<span>MCL Founder</span>
													</div>												
												</div>
												<!-- Single Reviews -->
												<div class="_loh_r96">
													<div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
													<div class="_loh_r92">
														<h4>Item Support</h4>
													</div>
													<div class="_loh_r93">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
													</div>	
													<div class="_loh_foot_r93">
														<h4>Kirti Washinton</h4>
														<span>Web Designer</span>
													</div>												
												</div>
											
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-7 position-static p-4">
									
									<div class="log_wraps">
									
										<a href="index.php" class="log-logo_head"><img src="assets/img/logo-header.png" class="img-fluid" width="80" alt="" /></a>
										<div class="log__heads">
											<h4 class="mt-0 logs_title">Sign <span class="theme-cl">In</span></h4>
											
										</div>
										<?php
										if(isset($_SESSION['alert'])){
											echo $_SESSION['alert'];
											$_SESSION['alert'] = null;
										}
										?>
										
										<form method="POST" action="../backend/userController/loginUser.php">

										<div class="form-group">
										
											<label>Email Address</label>
											<input type="text" name="address" class="form-control" placeholder="exemple.exemple@tek-up.de">
										</div>
										
										<div class="form-group">
											<label>Password<a href="forget-password.php" class="elio_right">Forget Password?</a></label>
											<input type="password" name="password" class="form-control" placeholder="*******">
										</div>
										
										<div class="form-group">
											<input type="submit" class="btn btn_apply w-100" value="Sign In" style="background-color: #0F52BA;"></a>
										</div>

										</form>
										
										<div class="form-group text-center">
											<span>Or SignIn with</span>
										</div>
										
										<div class="social_logs">
											<ul>
												<li class="fb-login"><a href="#"><img src="assets/img/google.svg" class="img-fluid mr-2" width="15" alt="" />Google</a></li>
												<li class="gp-login"><a href="#"><img src="assets/img/facebook.svg" class="img-fluid mr-2" width="15" alt="" />Facebook</a></li>
											</ul>
										</div>
										
										<div class="form-group text-center mb-0 mt-3">
											You Have't Any Account? <a href="register.php" class="theme-cl">SignUp</a>
										</div>
										
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- ========================== Login Elements ============================= -->
			

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

<!-- Mirrored from themezhub.net/learnup-demo-2/learnup/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Feb 2022 12:53:52 GMT -->
</html>