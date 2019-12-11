<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Our Gallery
	</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Floriculture Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!-- //for-mobile-apps -->
	<link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- pop-up-box -->
	<link href="<?= base_url('assets/'); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-up-box -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/base.css">
	<script src="<?= base_url('assets/'); ?>js/modernizr.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.fitvids.js"></script>
	<script src="<?= base_url('assets/'); ?>js/script.js"></script>

	<!-- font-awesome icons -->
	<link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link
		href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="w3_agileits_nav">
			<div class="container">
				<div class="w3ls-nav">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="<?= base_url('home/index'); ?>">Home</a></li>
								<li><a href="<?= base_url('shop/education'); ?>">Education</a></li>
								<li><a href="<?= base_url('shop/index'); ?>">Gallery</a></li>
								<li><a href="<?= base_url('shop/show_cart'); ?>">Cart</a></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
					</nav>
				</div>

			</div>
		</div>
		<div class="container">

			<div class="agile_header_grid">
				<div class="w3_agile_logo">
					<h1><a href="index.html">Floriculture</a></h1>
				</div>
				<div class="agileits_w3layouts_sign_in">
					<ul>

						<li>
							<div class="agileinfo_search">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Type text here..." required="">
									<input type="submit" value=" ">
								</form>
							</div>
						</li>
						<li><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3 class="agileinfo_sign">Sign In</h3>
		<div class="agileits_signin_form">
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="SIGN IN">
				<p>Don't have an account <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></p>
				<div class="w3agile_social_icons">
					<ul>
						<li class="wthree_follow">Follow us on :</li>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3 class="agileinfo_sign">Sign Up</h3>
		<div class="agileits_signin_form">
			<form action="#" method="post">
				<input type="text" name="name" placeholder="First Name" required="">
				<input type="text" name="name" placeholder="Last Name" required="">
				<input type="email" name="email" placeholder="Your Email" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="password" name="password" placeholder="Confirm Password" required="">
				<input type="submit" value="SIGN UP">
				<p>Already a member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></p>
				<div class="w3agile_social_icons">
					<ul>
						<li class="wthree_follow">Follow us on :</li>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</form>
		</div>
	</div>
	<!-- //pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});

	</script>
	<!-- banner -->
	<div class="banner1">

	</div>
	<!-- //banner -->
	<div class="w3l-gallery">
		<div class="container">
			<div class="galley-grid">
				<h3 class="w3l_head w3l_head1">Gallery</h3>
				<p class="w3ls_head_para w3ls_head_para1">Presents our product</p>
				<span class="lft-bar-gallery"> </span>
				<span class="rit-bar-gallery"> </span>
			</div>
			<div class="w3ls-top">
				<?php foreach($flower as $f) : ?>
				<div class="col-md-4 project">
					<div class="projectThumbnail">
						<div class="projectThumbnailHover projcet-ro">
							<h4><?= $f['nama']; ?></h4>
							<h5>Rp. <?= number_format($f['price'], 0, ',', '.'); ?></h5>
						</div>
						<img src="<?= base_url('assets/images/') . $f['image']; ?>" alt="Project 01"
							class="img-responsive thumbnailImage">
					</div>
					<div class="projectInfo">
						<div class="projectNavClose">
							<button class="closeButton"><img src="<?= base_url('assets/'); ?>images/cross.png"
									alt=""></button>
						</div>
						<div class="clearfix"> </div>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, itaque adipisci
							recusandae ducimus deleniti praesentium qui consectetur omnis totam, perferendis corrupti
							aspernatur voluptates minima nostrum? Veniam, omnis. Amet, quod obcaecati!.</p>
						<br>
						<a class="btn btn-primary btn-block" href="<?= base_url('shop/add_to_cart/') . $f['id']; ?>">Add
							to
							cart</a>
					</div>
				</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="index.html">Floriculture</a></h2>

			<div class="agileits_w3layouts_nav_right">
				<ul>
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value="Subscribe">
			</form>
			<br><br>
			<div class="clearfix"> </div>
		</div>
		<p>© 2017 Floriculture. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
	</div>
	<!-- //footer -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});

	</script>
	<!-- start-smoth-scrolling -->
	<!-- for bootstrap working -->
	<script src="<?= base_url('assets/'); ?>js/bootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!-- //for bootstrap working -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});

	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>
