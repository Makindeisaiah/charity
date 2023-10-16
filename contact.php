<?php

include "includes/db.php";
include "./includes/actions.php";


?>



<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 22:02:14 GMT -->

<?php
include "includes/head.php"
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
				<h2>Contact Us</h2>
				<p>Give a helping hand for poor people</p>
				<ul class="xs-breadcumb">
					<li class="badge badge-pill badge-primary"><a href="index.php" class="color-white"> Home /</a> Contact</li>
				</ul>
			</div>
		</div>
	</section>

	<main class="xs-main">

		<section class="xs-contact-section-v2">
			<div class="container">
				<div class="xs-contact-container">
					<div class="row">
						<div class="col-lg-12">
							<div class="xs-contact-form-wraper">
								<h4>Drop us a line</h4>
								<?php include "./includes/errorsmessage.php"; ?>
								<form action="#" method="POST" class="xs-contact-form contact-form-v2">
									<div class="input-group">
										<input type="text" name="name" class="form-control" placeholder="Enter Your Name....." required>
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-user"></i></div>
										</div>
									</div>
									<div class="input-group">
										<input type="email" name="email" class="form-control" placeholder="Enter Your Email....." required>
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										</div>
									</div>
									<div class="input-group massage-group">
										<textarea name="message" placeholder="Enter Your Message....."  class="form-control" cols="30" rows="10" required></textarea>
										<div class="input-group-append">
											<div class="input-group-text"><i class="fa fa-pencil"></i></div>
										</div>
									</div>
									<center><button class="btn btn-success" name="submit_message" type="submit">submit</button></center>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="how-works-tournaments" style="margin-top: 150px; margin-bottom: 100px;">
				<div class="overlay">
					<div class="container xs-contact-containe">
						<h1 style="text-align: center; color: #041d57;">Social media</h1>
						<div class="row cus-mar">
							<div class="col-md-6 col-lg-3">
								<div class="single-area text-center">
									<div class="img-area">
										<a href="https://www.instagram.com/thevalidreamsfoundation/"><img src="assets/images/instagram.png" alt="image" width="80px"></a>
									</div>
									<a href="https://www.instagram.com/thevalidreamsfoundation/">
										<h3 style="margin-top: 10px;">Instagram</h3>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="single-area text-center">
									<div class="img-area">
										<a href="#"><img src="assets/images/whatsapp.png" alt="image" width="80px"></a>
									</div>
									<a href="#">
										<h3 style="margin-top: 10px;">Whatsapp</h3>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="single-area text-center">
									<div class="img-area">
										<a href="#"><img src="assets/images/twitter.png" alt="image" width="80px"></a>
									</div>
									<a href="#">
										<h3 style="margin-top: 10px;">Twitter</h3>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="single-area text-center">
									<div class="img-area">
										<a href="#"><img src="assets/images/facebook_318-194827.avif" alt="image" width="80px"></a>
									</div>
									<a href="#ppp">
										<h3 style="margin-top: 10px;">Facebook</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
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
</body>

<!-- Mirrored from demo.xpeedstudio.com/html/charitypress/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 22:02:20 GMT -->

</html>