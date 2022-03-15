<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- PAGE TITLE -->
	<title>Login-Register - Coral Yachts</title>

	<!-- META-DATA -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<!-- CSS:: FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- CSS:: MAIN -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

</head>

<body>

<div class="r-wrapper">
	<header>

		<?php include "header.php"; ?>

	</header>
	<section id="r-login-register">
		<div class="r-login-register">
			<div class="r-login-register-in">
				<div class="r-auth-or">
					<span>OR</span>
				</div>
				<div class="clearfix">
					<div class="r-auth-outer r-login">
						<div class="r-auth-head">
							<h2><b>Login</b> Now</h2>
							<span>Login to our website</span>
						</div>
						<div class="r-auth-form">


							<!--- post to login controller --->
							<form action="LoginController.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" required placeholder="Email"
									       name="loginEmail">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" required placeholder="Password"
									       name="loginPassword">
								</div>
								<div class="form-group">
									<button class="btn btn-full" type="submit" name="loginSubmit">LOGIN NOW</button>
								</div>
							</form>


							<div class="r-from-inof">
								<p class="text-center">
									* Denotes mandatory field. <br>
									** At least one telephone number is required.
								</p>
							</div>
						</div>
					</div>
					<div class="r-auth-outer r-register">
						<div class="r-auth-head">
							<h2><b>Register</b> Now</h2>
							<span>Required information for account creation</span>
						</div>
						<div class="r-auth-form">

							<!-- form register controller -->
							<form action="RegistreerController.php" method="POST">
								<div class="form-group">
									<input type="text" required class="form-control" placeholder="User name"
									       name="registreerUsername">
								</div>
								<div class="form-group">
									<input type="password" required class="form-control" placeholder="Password"
									       name="registreerPassword">
								</div>
								<div class="form-group">
									<input type="password" required class="form-control" placeholder="Confirm Password"
									       name="registreerPasswordConfirmed">
								</div>
								<div class="form-group">
									<input type="email" required class="form-control" placeholder="Email Address"
									       name="registreerEmail">
								</div>
								<div class="form-group">
									<button class="btn btn-full" type="submit" name="registreerSubmit">SIGN UP NOW
									</button>
								</div>
							</form>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="r-get-in-touch">
		<div class="r-get-in-touch">
			<div class="container">
				<div class="r-get-header">
					<span>CONTACT US NOW</span>
					<h2>Keep <b>In Touch.</b></h2>
				</div>
				<div class="r-get-form">
					<form action="#" method="POST">
						<div class="clearfix">
							<div class="form-group"><input type="text" placeholder="User name"></div>
							<div class="form-group"><input type="email" placeholder="Email Address"></div>
						</div>
						<div class="form-group"><input type="email" placeholder="Title Message"></div>
						<div class="form-group">
							<textarea placeholder="Message"></textarea>
						</div>
						<div class="text-center">
							<button class="btn btn-full">SEND MESSAGE NOW</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="r-footer">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<img src="assets/images/footer-logo.png" class="d-block img-fluid" alt="">
							<p>
								We know the difference is in the details and that’s why our car rental services, in the
								tourism and
								business industry, stand out for their quality.
							</p>
							<form method="POST">
								<div class="r-newsletter">
									<input type="email" placeholder="Subscribe Newsletter">
									<button class="btn"><i class="fa fa-envelope"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<div class="r-footer-widget r-footer-phone">
								<span><i class="fa fa-phone"></i> CALL US ON LINE 1</span>
								<h5>100.1212.2000</h5>
							</div>
							<div class="r-footer-widget r-footer-nav">
								<h6>USEFUL LINK</h6>
								<nav>
									<ul>
										<li><a href="#">Private Policy</a></li>
										<li><a href="#">Term & Conditions</a></li>
										<li><a href="#">Copyright Notification</a></li>
										<li><a href="#">Register for New Member</a></li>
										<li><a href="#">Press Release</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<div class="r-footer-widget r-footer-phone">
								<span><i class="fa fa-phone"></i> CALL US ON LINE 2</span>
								<h5>100.2424.2000</h5>
							</div>
							<div class="r-footer-widget r-footer-nav">
								<h6>OUR INFO</h6>
								<nav>
									<ul>
										<li><a href="#">About Royal Cars</a></li>
										<li><a href="#">Our Mission & Strategy</a></li>
										<li><a href="#">Our Vision</a></li>
										<li><a href="#">Royal Cars Advantages</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<div class="r-footer-widget r-footer-map">
								<a href="#"> RoyalCars on Map</a>
							</div>
							<div class="r-footer-widget r-footer-nav">
								<h6>ACCOUNT INFORMATION</h6>
								<nav>
									<ul>
										<li><a href="#">Login to My Account</a></li>
										<li><a href="#">Press Releases</a></li>
										<li><a href="#">User Dashboard</a></li>
										<li><a href="#">Email Address</a></li>
										<li><a href="#">Lorem Ipsum dolorsit</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix r-footer-strip">
					<div class="col-xl-6 col-lg-6 col-md-5 col-sm-4 col-xs-12">
						©2018 Created by jThemes Studio
					</div>
					<div class="col-xl-6 col-lg-6 col-md-7 col-sm-8 col-xs-12">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i>. <span>Facebook</span></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i>.<span>Twitter</span></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i>.<span>Instagram</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
<!-- JQUERY:: JQUERY.JS -->
<script src="assets/js/jquery.min.js"></script>

<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- JQUERY:: PLUGINS -->
<script src="assets/js/plugins/owl/owl.carousel.min.js"></script>

<!-- JQUERY:: CUSTOM -->
<script src="assets/js/custom.js"></script>

</body>

</html>