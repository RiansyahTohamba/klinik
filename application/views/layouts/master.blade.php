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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>



<script src="{{ asset_url() }}plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset_url() }}plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset_url() }}plugins/greensock/ScrollToPlugin.min.js"></script>

<script src="{{ asset_url() }}plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="{{ asset_url() }}js/custom.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


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
					<li><a href="{{base_url()}}"><u>Beranda</u></a></li>
					<li>
					  <a class="dropdown-toggle" href="#" role="button" id="LinkDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <u>Layanan</u>
					  </a>
					  	<?php
				  			$CI =& get_instance();
							$services = $CI->db->query("SELECT * FROM services LIMIT 4")->result(); 
							$support_services = $CI->db->query("SELECT * FROM services WHERE id > 4")->result(); 
					  	?>
					  	<ul class="dropdown-menu" aria-labelledby="LinkDropdownDemo">
					  		@foreach ($services as $service)
						    <li>
						    	<a tabindex="-1" href="{{base_url().'index.php/services/show/'.$service->id }}">{{$service->name}}</a>
						    </li>
						  	@endforeach
					      
					      <li class="dropdown-submenu">
					        <a class="test" tabindex="-1" href="#">Layanan <br>Pendukung >> <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					      		@foreach ($support_services as $service)
								    <li>
								    	<a tabindex="-1" href="{{base_url().'index.php/services/show/'.$service->id }}">{{$service->name}}</a>
								    </li>
							  	@endforeach  	
					          
					        </ul>
					      </li>
					    </ul>
					  <script>
						$(document).ready(function(){
						   $('.dropdown-submenu a.test').on("click", function(e){
						    $(this).next('ul').toggle();
						    e.stopPropagation();
						    e.preventDefault();
						  });
						});
						</script>
					</li>
					<li><a href="{{base_url()}}#contact"> <u>Kontak</u></a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Senin - Minggu: 8:00  - 22:00 </div>

				
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

	

@yield('content')


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Kontak</div>
							<ul id="our_contact" class="contact_list">
								<li>(021) 8269 3888</li>
								<li>+62 81945 110 773</li>
								<li>admin@klinikpuriintan.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Alamat :</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Bekasi Timur, Jawa Barat</div>
									<div class="location_text">Jl KH Agus Salim (Tugu) No 35</div>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Opening Hours -->
					<div class="col-lg-3 footer_col">
						<div class="opening_hours">
							<div class="footer_title">Jam Buka</div>
							<ul class="opening_hours_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Senin:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Selasa:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Rabu:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Kamis:</div>
									<div class="ml-auto">8:00am - 9:00pm</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Jumat:</div>
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
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<a href="https://api.whatsapp.com/send?phone=6281945110773&text=Halo%20Admin" class="float_whatsapp" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>