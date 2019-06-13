<!DOCTYPE html>
<html lang="en">
<head>
<title>Klinik Puri Intan Medika</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset_url() }}styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="{{ asset_url() }}plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="{{ asset_url() }}plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset_url() }}styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset_url() }}styles/responsive.css">

<script src="{{ asset_url() }}js/jquery-3.2.1.min.js"></script>
<script src="{{ asset_url() }}styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{ asset_url() }}styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset_url() }}plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/ScrollToPlugin.min.js"></script>

<script src="{{ asset_url() }}plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="{{ asset_url() }}js/custom.js"></script>

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">

					<img src="{{ asset_url() }}images/logo.png" style="width: 100px">
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active" id=""><a href="index.php">Home</a></li>
					<li><a href="#">| Jadwal</a></li>
					<li><a href="#">| Kontak</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Senin - Minggu: 8:00  - 22:00 </div>

				<!-- Header Phone -->
				<div class="header_phone">(021) 8269 3888</div>

				<!-- Appointment Button -->
				<div class="button button_1 header_button"><a href="#">Layanan Kami</a></div>

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://www.instagram.com/klinikpuriintan/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="https://web.facebook.com/KlinikPuriIntan/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://twitter.com/klinikpuriintan"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
			<div class="menu_link">(021) 8269 3888</div>
			<div class="menu_link"><a href="#">Layanan Kami</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

@yield('content')


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+53 345 7953 32453</li>
								<li>yourmail@gmail.com</li>
								<li>contact@gmail.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Miami</div>
									<div class="location_text">45 Creekside Av  FL 931</div>
								</li>
								<li>
									<div class="location_title">Los Angeles</div>
									<div class="location_text">1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Opening Hours -->
					<div class="col-lg-3 footer_col">
						<div class="opening_hours">
							<div class="footer_title">Opening Hours</div>
							<ul class="opening_hours_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Monday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thuesday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Wednesday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Thursday:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Friday:</div>
									<div class="ml-auto">8:00am - 7:00pm</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							</div>
							<nav class="footer_nav ml-md-auto">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>