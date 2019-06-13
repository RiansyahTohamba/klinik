<?php $__env->startSection('content'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="<?php echo e(asset_url()); ?>styles/google_map.css" rel='stylesheet' type='text/css'>

	<script src="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	
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
						<div class="background_image" style="background-image:url(<?php echo e(asset_url().'images/'.$key); ?>)"></div>
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
												<div class="button button_1 trans_200"><a href="<?php echo e(base_url()); ?>#our_services">Layanan Kami</a></div>
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

			<div id="contact" class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>
	<!-- Call to action -->

	<div  class="cta">
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
		<div class="background_image" style=""></div>
		<div class="container">
			<div class="row row-eq-height">

				<!-- Why Choose Us Image -->
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="why_image_container">
						<div class="why_image"><img src="<?php echo e(asset_url()); ?>images/obat.jpeg" alt="" style="height: 600px"></div>
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
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Obat Terbaik</div>
										<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Dokter Terbaik di bidangnya</div>
										<div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
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

	<div id="our_services" class="services">
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
				<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<a href="<?php echo e(base_url()); ?>index.php/services">
								<div class="service">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="service_title"><?php echo $key ?></div>
									<div class="service_text">
										<p><?php echo $value ?></p>
									</div>
								</div>
								</a>
							</div>
						</div>	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

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
						<div id="map"></div>
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
					<div class="section_title_container">
						
						<div class="section_title"><h2>Artikel</h2></div>
					</div>
					<div class="row services_row">
						<p>dari instagram</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<input type="hidden" id="marker_url" value="<?php echo e(asset_url()); ?>/images/marker.png">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="<?php echo e(asset_url()); ?>js/google_map.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/klinikpuri/application/views/index.blade.php ENDPATH**/ ?>