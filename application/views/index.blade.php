
@extends('layouts.master')
@section('content')

	<link rel="stylesheet" type="text/css" href="{{ asset_url() }}plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{ asset_url() }}plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="{{ asset_url() }}plugins/OwlCarousel2-2.2.1/animate.css">

	<script src="{{ asset_url() }}plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	
	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<?php 
				
				$slides = array(
					'web_banner_1.jpg'=> '',
					'web_banner_2.jpg'=> '',
					'web_banner_3.jpg'=> '',
					'web_banner_4.jpg'=> '',
					'web_banner_5.jpg'=> '',
				);
				foreach ($slides as $key => $value) {
					
					?>
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{ asset_url().'images/'.$key}})"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">

									</div>
								</div>
							</div>
						</div>
					</div>
			<?php } ?>
			</div>

			<!-- Home Slider Dots -->

			<div id="contact" class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>

	<div  class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						</div>
						
						<div class="cta_content">
							<div class="cta_title">Hubungi Kami</div>
							<div class="cta_text">
								Jl KH Agus Salim (Tugu) No 35, Bekasi Timur, Jawa Barat
							</div>
							<p>Telp : (021) 8269 3888 
								<br>
								Fax : (021) 8269 3868
							</p>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


				<!-- Doctor Schedules -->
				
				<div class="doctors_container">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<div class="section_title"><h2>Jadwal Dokter</h2></div>
							</div>
						</div>
						<div class="row services_row d-flex justify-content-center">
							<div id="carouselExampleControls" class="carousel slide slide_doctors" data-ride="carousel">
							  <div class="carousel-inner ">
							    <div class="carousel-item active">
							      <img class="d-block w-100" src="{{asset_url().'images/doctor_1.png'}}"  alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" src="{{asset_url().'images/doctor_2.png'}}"  alt="Second slide">
							    </div>

							    <div class="carousel-item">
							      <img class="d-block w-100" src="{{asset_url().'images/doctor_3.png'}}"  alt="Third slide">
							    </div>

							    <div class="carousel-item">
							      <img class="d-block w-100" src="{{asset_url().'images/doctor_4.png'}}"  alt="Third slide">
							    </div>

							    <div class="carousel-item">
							      <img class="d-block w-100" src="{{asset_url().'images/doctor_5.png'}}"  alt="Third slide">
							    </div>


							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>

						</div>
					</div>
				</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="background_image" style=""></div>
		<div class="container">
			<div class="row row-eq-height">

				<!-- Why Choose Us Image -->
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="why_image_container">
						<div class="why_image"><img src="{{ asset_url() }}images/obat.jpeg" alt="" style="height: 600px"></div>
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
										<div class="icon"><img src="{{ asset_url() }}images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Obat Terbaik</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="{{ asset_url() }}images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Dokter Terbaik di bidangnya</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="{{ asset_url() }}images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Respon cepat</div>
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

	<div id="our_services" class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h2>Info & Update</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				@foreach ($data['informations']->result() as $information)
					
						<div class="col-xl-4 col-md-6 service_col">
							<a href="{{base_url().'index.php/information/show/'.$information->id }}">
								<figure>
							        <img src="{{asset_url().'images/'.$information->photo}}" 
							        height="200px" width="300px"  style="margin-left: 20px">
							        <figcaption>
							        	<b>{{$information->title}}</b>
							        	<small>{{date("Y/m/d")}}</small>
							        </figcaption>
							    </figure>
							</a>	
						</div>	
				@endforeach
				

			</div>
		</div>
	</div>


	<!-- Visit Us -->

	<div id="our_services" class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						
						<div class="section_title"><h2>Kunjungi Kami</h2></div>
					</div>
					<div class="row services_row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.74882314722!2d107.00499961671271!3d-6.239039875109695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf96a031f9c798501!2sKlinik+Puri+Intan!5e0!3m2!1sen!2sid!4v1560491998345!5m2!1sen!2sid" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Article -->
		<div id="our_services" class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<iframe width="100%" height="600" src="https://www.youtube.com/embed/KjPzPKNbsxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						
				</div>
			</div>
		</div>
		</div>


	<div id="our_services" class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
						
					<div class ="section_title"><h2><a href="https://www.instagram.com/klinikpuriintan/"><i class="fa fa-instagram" aria-hidden="true"></i> @klinikpuriintan</h2></a></div>
					<div class="row services_row">
						<div class="ig-thumbnail">
							@foreach ($data['photos'] as $photo)
								<a href="https://www.instagram.com/klinikpuriintan/"><img src="{{$photo}}" class="img-thumbnail" width="350" style="margin-left: 20px"> </a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<input type="hidden" id="marker_url" value="{{asset_url()}}/images/marker.png">

@endsection