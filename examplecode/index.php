<?php
@session_start();
include "DatabaseConfig.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<!-- PAGE TITLE -->
	<title>Home - CoralYachts</title>

	<!-- META-DATA -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<!-- CSS:: FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- CSS:: ANIMATE -->
	<link rel="stylesheet" type="text/css" href="assets/css/plugins/animate/animate.css">

	<!-- CSS:: MAIN -->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">

</head>

<body>

<div class="r-wrapper">
	<header>
		<div class="r-header r-header-inner r-header-strip-01">
			<?php include "header.php"; ?>
			<div class="r-slider owl-carousel" id="defaultHomeSlider">
				<div class="r-slider-item">
					<img src="assets/images/main-slider-01.jpg" class="img-fluid d-block m-auto" alt="">
					<div class="container">
						<div class="r-slider-top-content">
							<h1 class="animated fadeInDown">Boot 1</h1>
						</div>
					</div>
				</div>
				<div class="r-slider-item">
					<img src="assets/images/main-slider-04.jpg" class="img-fluid d-block m-auto" alt="">
					<div class="container">
						<div class="r-slider-top-content">
							<h1>Boot 2</h1>
						</div>
					</div>
				</div>
				<div class="r-slider-item">
					<img src="assets/images/main-slider-05.jpg" class="img-fluid d-block m-auto" alt="">
					<div class="container">
						<div class="r-slider-top-content">
							<h1>Boot 3</h1>
						</div>
					</div>
				</div>
			</div>


		</div>
	</header>
	<section id="r-advantages-part" class="r-advantages-part">
		<div class="r-advantage-main-part">
			<div class="container clearfix">
				<div class="advantage-head">
					<span>120+ BOAT TYPE &amp; BRANDS</span>
					<h2>CoralYachts <b>Advantages.</b></h2>
				</div>
				<div class="row clearfix">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="r-advantages-box">
							<div class="icon"><img src="assets/images/advantage-icon-1.png" alt=""></div>
							<div class="head animated pulse">24/7 Customer Online Support</div>
							<div class="sub-text">Call us Anywhere Anytime</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="r-advantages-box">
							<div class="icon"><img src="assets/images/advantage-icon-2.png" alt=""></div>
							<div class="head animated pulse">Reservation Anytime You Wants</div>
							<div class="sub-text">24/7 Online Reservation</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="r-advantages-box">
							<div class="icon"><img src="assets/images/advantage-icon-3.png" alt=""></div>
							<div class="head animated pulse">Lots of Picking Locations</div>
							<div class="sub-text">250+ Locations</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="r-about-info">
		<div class="r-about-info">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="r-about-info-img">
							<img src="assets/images/about-img-01.png" class="img-fluid d-block m-auto" alt="">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="r-about-info-content">
							<div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-w pt-0">
								<span>KNOW MORE ABOUT US</span>
								<h2>Who <b>CoralYachts</b> Are.</h2>
							</div>
							<p>
								We know the difference is in the details and that’s why our Boat rental services, in the
								tourism and
								business industry, stand out for their quality and good taste.
							</p>
							<ul class="mb-0 pl-0">
								<li><i class="fa fa-check-circle"></i> We working since 1980 with 4.000 customers</li>
								<li><i class="fa fa-check-circle"></i> All brand & type Boat in our docks</li>
								<li><i class="fa fa-check-circle"></i> 1.000+ picking locations around the world</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="r-quote">
		<div class="r-quote r-quote-sub pt-0 r-quote-noafter">
			<div class="r-sec-head r-accent-color r-sec-head-t">
				<span>LATEST TESTIMONIAL</span>
				<h2>What <b>They Say</b> About Us.</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12" data-wow-delay="0.2s">
						<div id="r-quote-carousel" class="carousel slide">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item">
									<p>“This was our first time renting from CoralYachts and we were very pleased with
										the whole
										experience. Your price was lower than other companies. Our rental experience was
										good from start
										to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								</div>
								<div class="carousel-item active">
									<p>“This was our first time renting from CoralYachts and we were very pleased with
										the whole
										experience. Your price was lower than other companies. Our rental experience was
										good from start
										to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								</div>
								<div class="carousel-item">
									<p>“This was our first time renting from CoralYachts and we were very pleased with
										the whole
										experience. Your price was lower than other companies. Our rental experience was
										good from start
										to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								</div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#r-quote-carousel" data-slide-to="0">
									<img class="img-fluid d-block" src="assets/images/user-02.jpg" alt="">
									<span>
                      <b>Mohammed Kaya</b> <br>
                      Docent, team Creative Technologie, Aventus
                    </span>
								</li>
								<li data-target="#r-quote-carousel" data-slide-to="1" class="active text-center">
									<img class="img-fluid d-block" src="assets/images/user-01.png" alt="">
									<span>
                      <b>Kevin Smit</b> <br>
                      Docent, team Creative Technologie, Aventus
                    </span>
								</li>
								<li data-target="#r-quote-carousel" data-slide-to="2">
									<img class="img-fluid d-block" src="assets/images/user-03.png" alt="">
									<span>
                      <b>Kevin de Korte</b> <br>
                      Docent, team Creative Technologie, Aventus
                    </span>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php

	$dbconfig = new DatabaseConfig;

	$boatQuery = "SELECT * FROM boten";
	$boatResult = $dbconfig->connect()->prepare($boatQuery);
	$boatResult->execute(array());
	$boatRow = $boatResult->setFetchMode(PDO::FETCH_ASSOC);
	$boatRow = $boatResult->fetchAll();
	?>

	<h1>Huur een boot!</h1>

	<table class="table">
		<thead>
		<tr>
			<th>#</th>
			<th>Boot</th>
			<th>Beschrijving</th>
			<th>Locatie</th>
			<th>Prijs</th>
			<th>Reserveer</th>
		</tr>
		</thead>
		<tbody>
		<?php
		if (!empty($boatRow)) {
			$i = 0;
			$rowLength = count($boatRow);
			while ($i < $rowLength) {
				?>
				<tr>
					<th scope="row"><?php echo $boatRow[$i]["ID"] ?></th>
					<td><?php echo $boatRow[$i]["Titel"] ?></td>
					<td><?php echo $boatRow[$i]["Beschrijving"] ?></td>
					<td><?php echo $boatRow[$i]["Locatie"] ?></td>
					<td><?php echo $boatRow[$i]["Prijs"] ?></td>
					<?php
					if ($boatRow[$i]["isRented"] == 0) {
						?>
						<td>
							<button onclick="reserveerMethod">reserveer</button>
						</td>
						<script>
							function reserveerMethod() {
								<?php
								$sql = "UPDATE boten SET isRented = 1 WHERE ID = $i";

								$stmt = $dbconfig->connect()->prepare($sql);
								$stmt->execute();

								header("Location: boat-listing.php");
								?>
							}
						</script>
						<?php
					}
					?>
				</tr>
				<?php
				$i++;
			}
		} else {
			echo "foutje oepsie woepsie uwu";
		}
		?>
		</tbody>
	</table>

	<div id="r-gallery-part">
		<div class="r-gallery-part r-gallery-part-home pt-0 pb-0">
			<ul class="clearfix">
				<li>
					<a href="assets/images/gallery-img01.jpg" data-rel="lightcase:myCollection">
						<img src="assets/images/gallery-img01.jpg" class="d-block img-fluid" alt="">
						<div class="gallery-hover">
							<div class="gallery-text">
								<div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="assets/images/gallery-img02.jpg" data-rel="lightcase:myCollection">
						<img src="assets/images/gallery-img02.jpg" class="d-block img-fluid" alt="">
						<div class="gallery-hover">
							<div class="gallery-text">
								<div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="assets/images/gallery-img03.jpg" data-rel="lightcase:myCollection">
						<img src="assets/images/gallery-img03.jpg" class="d-block img-fluid" alt="">
						<div class="gallery-hover">
							<div class="gallery-text">
								<div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="assets/images/gallery-img04.jpg" data-rel="lightcase:myCollection">
						<img src="assets/images/gallery-img04.jpg" class="d-block img-fluid" alt="">
						<div class="gallery-hover">
							<div class="gallery-text">
								<div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="assets/images/gallery-img05.jpg" data-rel="lightcase:myCollection">
						<img src="assets/images/gallery-img05.jpg" class="d-block img-fluid" alt="">
						<div class="gallery-hover">
							<div class="gallery-text">
								<div class="icon-gallery"><i class="fa fa-search" aria-hidden="true"></i></div>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<footer>
		<div class="r-footer">
			<div class="container">
				<div class="row clearfix">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<img src="assets/images/footer-logo.png" class="d-block img-fluid" alt="">
							<p>
								We know the difference is in the details and that’s why our boat rental services, in the
								tourism and
								business industry, stand out for their quality.
							</p>
							<form action="#">
								<div class="r-newsletter">
									<input type="email" placeholder="Subscribe Newsletter">
									<button class="btn"><i class="fa fa-envelope"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<div class="r-footer-widget r-footer-phone">
								<span><i class="fa fa-phone"></i> CALL US ON LINE 2</span>
								<h5>100.2424.2000</h5>
							</div>
							<div class="r-footer-widget r-footer-nav">
								<h6>OUR INFO</h6>
								<nav>
									<ul>
										<li><a href="#">About CoralYachts/a></li>
										<li><a href="#">Our Mission & Strategy</a></li>
										<li><a href="#">Our Vision</a></li>
										<li><a href="#">CoralYachts Advantages</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="r-footer-block">
							<div class="r-footer-widget r-footer-map">
								<a href="#"> <img src="assets/images/icon-footer-map.png" alt="" class="icon"/>
									CoralYachts on Map</a>
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
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						©2018 Created by jThemes Studio
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
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

<!-- JQUERY:: APPEAR.JS -->
<script src="assets/js/plugins/appear/appear.js"></script>

<!-- JQUERY:: COUNTER.JS -->
<script src="assets/js/plugins/counter/jquery.easing.min.js"></script>
<script src="assets/js/plugins/counter/counter.min.js"></script>

<!-- JQUERY:: BOOTSTRAP.JS -->
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- JQUERY:: PLUGINS -->
<script src="assets/js/plugins/owl/owl.carousel.min.js"></script>
<script src="assets/js/plugins/lightcase/lightcase.js"></script>


<!-- JQUERY:: MAP -->
<script src="assets/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>

<!-- JQUERY:: CUSTOM.JS -->
<script src="assets/js/custom.js"></script>

</body>

</html>