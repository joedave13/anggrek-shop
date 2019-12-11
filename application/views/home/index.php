<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Floriculture</title>
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

						<!-- <li>
							<div class="agileinfo_search">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Type text here..." required="">
									<input type="submit" value=" ">
								</form>
							</div>
						</li> -->
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
				<input type="text" name="name" placeholder="Full Name" required="">
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
	<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	<div class="banner">
		<div class="container">
			<h3>Flowers come in a variety of colours, with shades ranging </h3>

			<div class="wthree_banner_grids">
				<div class="col-md-3 wthree_banner_grid">
					<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
					<h4>Leaf</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
					<h4>Tree</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
					<h4>Fruit</h4>
				</div>
				<div class="col-md-3 wthree_banner_grid">
					<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
					<h4>Beautiful</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_more">
				<ul>

					<li><a href="#" class="hvr-icon-hang" data-toggle="modal" data-target="#myModal">Read More</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Floriculture
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="<?= base_url('assets/'); ?>images/g9.jpg" alt=" " class="img-responsive" />
						<p>Flora merupakan salah satu bagian dari keindahan alam. Berbagai jenis flora dapat kita
							temukan dalam keadaan di sekitar kita. Merupakan tugas kta bersama untuk merawat dan menjaga
							flora-flora ini agar tidak rusak dan dapat selalu terjaga kelangsungan hidupnya.
							<i>"Keep our living creature save."</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //bootstrap-pop-up -->
	<div class="about">
		<div class="container">
			<div class="col-md-4 agileits_about_left">
				<h3 class="w3l_head">About Us</h3>
				<p class="w3ls_head_para w3ls_head_para1">Know Us Well</p>
			</div>
			<div class="col-md-8 agileits_about_right">
				<p>Floranesia adalah toko bunga anggrek digital yang siap melayani kebutuhan anggrekmu.
					Menyediakan bibit bunga anggrek, peralatan untuk menanam bunga anggrek dan juga bunga anggrek yang
					sudah tumbuh.
					Tidak hanya menjual, kami juga menyediakan berbagai macam edukasi yang menunjang bunga anggrekmu.
					Bunga anggrek yang kamu beli secara online, bisa kami kirimkan ke alamatmu dengan selamat.</p>
				<ul>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Penjualan Bunga</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Penjualan Bibit</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Budidaya Tanaman</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Edukasi Tanaman</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Services</h3>
			<p class="w3ls_head_para w3ls_head_para1">Our Services</p>
			<div class="service-row">
				<div class="col-md-4 col-sm-4 service-gds service-gd1">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-scissors" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Perawatan</h4>
						<p class="description">Kami melayani perawatan bunga anggrek agar dapat terjaga kualitasnya.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd2">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-leaf" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Penjualan</h4>
						<p class="description">Kami melayani penjualan tanaman anggrek. Varietas yang sediakan juga
							bermacam-macam</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd3">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-modx" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Budidaya</h4>
						<p class="description">Kami melakukan budidaya berbagai jenis tanaman anggrek, agar
							varietas-verietas tersebut dapat terjaga keberadaannya.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd4">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-arrows" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Edukasi</h4>
						<p class="description">Kami juga menyediakan edukasi bagaimana cara membudidayakan anggrek,
							melakukan perawatan, dan lain-lain.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd5">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Komunitas</h4>
						<p class="description">Didukung oleh komunitas dan pakar tanaman yang terpercaya.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 service-gds service-gd6">
					<div class="bott-img">
						<div class="icon-holder">
							<i class="fa fa-smile-o" aria-hidden="true"></i>
						</div>
						<h4 class="mission">Kepuasan</h4>
						<p class="description">Produk dan pelayanan yang kami sediakan sudah pasti memuaskan anda.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!-- features -->
	<div class="features">
		<div class="container">
			<h3 class="w3l_head w3l_head1">Features</h3>
			<p class="w3ls_head_para w3ls_head_para1">quam ultrices</p>
			<div class="w3_agile_features_grids">
				<div class="col-md-3 w3_agile_features_grid">
					<div class="ih-item circle effect1 agile_features_grid">
						<div class="spinner"></div>
						<div class="img"><img src="<?= base_url('assets/'); ?>images/1.jpg" alt=" "
								class="img-responsive"></div>
					</div>
					<fieldset>
						<legend>Pharetra</legend>
						Donec ullamcorper ipsum quis turpis scelerisque, efficitur scelerisque urna pharetra.
					</fieldset>
				</div>
				<div class="col-md-3 w3_agile_features_grid">
					<div class="ih-item circle effect1 agile_features_grid">
						<div class="spinner"></div>
						<div class="img"><img src="<?= base_url('assets/'); ?>images/4.jpg" alt=" "
								class="img-responsive"></div>
					</div>
					<fieldset>
						<legend>Efficitur</legend>
						Donec ullamcorper ipsum quis turpis scelerisque, efficitur scelerisque urna pharetra.
					</fieldset>
				</div>
				<div class="col-md-3 w3_agile_features_grid">
					<div class="ih-item circle effect1 agile_features_grid">
						<div class="spinner"></div>
						<div class="img"><img src="<?= base_url('assets/'); ?>images/2.jpg" alt=" "
								class="img-responsive"></div>
					</div>
					<fieldset>
						<legend>Scelerisque</legend>
						Donec ullamcorper ipsum quis turpis scelerisque, efficitur scelerisque urna pharetra.
					</fieldset>
				</div>
				<div class="col-md-3 w3_agile_features_grid">
					<div class="ih-item circle effect1 agile_features_grid">
						<div class="spinner"></div>
						<div class="img"><img src="<?= base_url('assets/'); ?>images/3.jpg" alt=" "
								class="img-responsive"></div>
					</div>
					<fieldset>
						<legend>Ullamcorper</legend>
						Donec ullamcorper ipsum quis turpis scelerisque, efficitur scelerisque urna pharetra.
					</fieldset>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
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
		<p>© 2019 Floriculture. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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
