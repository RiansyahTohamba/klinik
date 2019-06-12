<!DOCTYPE html>
<html lang="en">
<head>
<title>Klinik Puri Intan Medika</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<!-- <div>Dr<span>PRO</span></div>
					<div>Plastic Surgery</div> -->

					<img src="images/logo.png" style="width: 100px">
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active" id=""><a href="index.php">Home</a></li>
					<li><a href="#">Jadwal</a></li>
					<li><a href="#">Kontak</a></li>
				</ul>
			</nav>
			<!-- <nav class="address_responsive">
				Jl KH Agus Salim, Bekasi Timur
				(021) 8269 3888
				+62 81945 110 773
			</nav> -->
			<!-- <nav class="main_nav_responsive">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active" id=""><a href="index.php">Home</a></li>
					<li><a href="#">Jadwal</a></li>
					<li><a href="#pelayanan">Layanan</a></li>
					<li><a href="#">Kontak</a></li>
				</ul>
			</nav> -->
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Senin - Minggu: 8:00  - 22:00 </div>

				<!-- Header Phone -->
				<div class="header_phone">(021) 8269 3888</div>

				<!-- Appointment Button -->
				<div class="button button_1 header_button"><a href="#">Buat Janji</a></div>

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
			<div class="menu_link"><a href="#">Buat Janji</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<?php 
				$slides = array(
					'home_slider.jpg'=> '',
					'front_office.jpeg'=> '',
					'blog_1.jpg'=> ''
				);

				foreach ($slides as $key => $value) {
					
					?>
					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/<?php echo $key ?>)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_subtitle">#1 Klinik Terbaik </div>
											<div class="home_title">Kesehatan anda prioritas kami</div>
											<div class="home_text">
												<p>Layanan Fasilitas Kesehatan komprehensif, dengan sajian pelayanan yang Edukatif, Preventif dan Kuratif untuk Generasi Penerus Bangsa yang Gemilang</p>
											</div>
											<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
												<div class="button button_1 trans_200"><a href="#">Buat Janji</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php } ?>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>
	<!-- Call to action -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="cta_content">
							<div class="cta_title">Hubungi Kami</div>
							<div class="cta_text">Jl KH Agus Salim (Tugu) No 35, Bekasi Timur, Jawa Barat
				</div>
						</div>
						<div class="cta_phone ml-lg-auto">(021) 8269 3888</div>
						<div class="cta_phone ml-lg-auto">+62 81945 110 773</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose Us -->

	<div class="why">
		<div class="background_image" style="background-image:url(images/why.jpg)"></div>
		<div class="container">
			<div class="row row-eq-height">

				<!-- Why Choose Us Image -->
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="why_image_container">
						<div class="why_image"><img src="images/why_1.jpg" alt=""></div>
					</div>
				</div>

				<!-- Why Choose Us Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="why_content">
						<div class="section_title_container">
							<div class="section_title"><h2>Kenapa memilih kami?</h2></div>
						</div>
						<div class="why_list">
							<ul>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Obat Terbaik</div>
										<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Dokter Terbaik di bidangnya</div>
										<div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Respon cepat</div>
										<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Services -->

	<div id="pelayanan" class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						
						<div class="section_title"><h2>Pelayanan Kami</h2></div>
						<?php 

						$services = array(
							'Umum'=> 'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Kebidanan'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Poli Gigi'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Poli Laktasi'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Pijat Bayi'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Senam Hamil'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Home Care'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Poli Tumbuh Kembang'=>'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl',
							'Farmasi'=> 'Poli umum kami siap melayani keluhan Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl'
						);
						?>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<?php foreach ($services as $key => $value) { ?>
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title"><?php echo $key ?></div>
							<div class="service_text">
								<p><?php echo $value ?></p>
							</div>
						</div>
					</div>
				</div>	
				<?php } ?>
				

			</div>
		</div>
	</div>




	<!-- Extra -->

	<div class="extra">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/extra.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="extra_container d-flex flex-row align-items-start justify-content-end">
						<div class="extra_content">
							<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
								<div>30<span>%</span></div>
								<div>Discount</div>
							</div>
							<!-- Pakai API instagram -->
							<div class="extra_title">Promosi</div>
							<div class="extra_text">
								<p>Dari instagram</p>
							</div>
							<div class="button button_1 extra_link trans_200"><a href="#">read more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

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