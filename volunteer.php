<?php

include "./includes/actions.php";






?>

<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/volunteer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 22:02:13 GMT -->

<?php
include "includes/head.php";
?>

<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>



	<?php
	include "./includes/header.php";
	?>


	<section class="xs-banner-inner-section parallax-window" style="background-image:url('assets/images/2.jpg')">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>Volunteer</h2>
				<p>Give a helping hand for poor people</p>
				<ul class="xs-breadcumb">
					<li class="badge badge-pill badge-primary"><a href="index.php" class="color-white"> Home /</a> Volunteer</li>
				</ul>
			</div>
		</div>
	</section>

	<main class="xs-main">

		<section class="xs-section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-volunteer-form-wraper volunteer-version-2">
							<h2>Become a Volunteer</h2>
							<p>It only takes a minute to set up a campaign. Decide what to do. Pick a name. Pick a photo. And just like that, you’ll be ready to start raising money.</p>
							<form action="" method="POST" id="volunteer-form" class="xs-volunteer-form">
							<?php include "./includes/errorsmessage.php"; ?>
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="full_name" id="volunteer_name" class="form-control" placeholder="Full name" required>
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" id="volunteer_email" class="form-control" placeholder="Email address" required>
									</div>
									<div class="col-lg-6">
										<select name="gender" class="form-control" id="volunteer_brach" required>
											<option>Gender</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
									<div class="col-lg-6">
										<input name="phone_number" type="text" id="volunteer_email" class="form-control" placeholder="Phone number" required>
									</div>
									<div class="col-lg-12">
										<select name="location" class="form-control" id="volunteer_brach" required>
											<option>Choose your location</option>
											<option>ABUJA FCT</option>
											<option>ABIA</option>
											<option>ADAMAWA</option>
											<option>AKWA IBOM</option>
											<option>ANAMBRA</option>
											<option>BAUCHI</option>
											<option>BAYELSA</option>
											<option>BENUE</option>
											<option>BORNO</option>
											<option>CROSS RIVER</option>
											<option>DELTA</option>
											<option>EBONYI</option>
											<option>EDO</option>
											<option>EKITI</option>
											<option>ENUGU</option>
											<option>GOMBE</option>
											<option>IMO</option>
											<option>JIGAWA</option>
											<option>KADUNA</option>
											<option>KANO</option>
											<option>KATSINA</option>
											<option>KEBBI</option>
											<option>KOGI</option>
											<option>KWARA</option>
											<option>LAGOS</option>
											<option>NASSARAWA</option>
											<option>NIGER</option>
											<option>OGUN</option>
											<option>ONDO</option>
											<option>OSUN</option>
											<option>OYO</option>
											<option>PLATEAU</option>
											<option>RIVERS</option>
											<option>SOKOTO</option>
											<option>TARABA</option>
											<option>YOBE</option>
											<option>ZAMFARA</option>
										</select>
									</div>
								</div>
								<button name="submit" type="submit" class="btn btn-secondary">apply now</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="assets/images/volunteer.png" alt>
					</div>
				</div>
			</div>
		</section>

		<section class="xs-section-padding bg-gray">
			<div class="container">
				<div class="xs-heading row xs-mb-60">
					<div class="col-md-9 col-xl-9">
						<h2 class="xs-title">Our Volunteers</h2>
						<span class="xs-separetor dashed"></span>
						<p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They also encourage their users to offer rewards to fans as a way to repay them for their support.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="xs-single-team xs-mb-50">
							<img src="assets/images/16.jpg" alt>
							<div class="xs-team-content">
								<h4>Samsindeen Salako</h4>
								<small>CEO & Founder</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-red" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="xs-single-team xs-mb-50">
							<img src="assets/images/team/team_8.png" alt>
							<div class="xs-team-content">
								<h4>Mr. Aladin</h4>
								<small>General Manager</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-purple" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="xs-single-team xs-mb-50">
							<img src="assets/images/team/team_8.png" alt>
							<div class="xs-team-content">
								<h4>Zummon Khan</h4>
								<small>Volunteer</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="xs-single-team">
							<img src="assets/images/team/team_8.png" alt>
							<div class="xs-team-content">
								<h4>Banana Halim</h4>
								<small>Volunteer</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-riptide" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="xs-single-team">
							<img src="assets/images/team/team_8.png" alt>
							<div class="xs-team-content">
								<h4>Kumiriano Li</h4>
								<small>Volunteer</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-yellow" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="xs-single-team">
							<img src="assets/images/team/team_8.png" alt>
							<div class="xs-team-content">
								<h4>Join Now</h4>
								<small>Want to join with us</small>
								<svg class="xs-svgs" preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 270 138">
									<path class="fill-navy-blue" d="M375,3294H645v128a10,10,0,0,1-10,10l-250-20a10,10,0,0,1-10-10V3294Z" transform="translate(-375 -3294)" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- footer start -->

	<?php
	include "includes/footer.php";
	?>

	<!-- footer end -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/spectragram.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
	<script src="assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>