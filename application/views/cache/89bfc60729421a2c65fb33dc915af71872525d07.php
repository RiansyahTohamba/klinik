<?php $__env->startSection('content'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset_url()); ?>plugins/OwlCarousel2-2.2.1/animate.css">

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
												<div class="button button_1 trans_200"><a href="<?php echo e(base_url().'index.php/services/show/1'); ?>">Layanan Kami</a></div>
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
						<div class="cta_phone ml-lg-auto"><i class="fa fa-whatsapp" aria-hidden="true"></i> +62 81945 110 773</div>
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
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Dokter Terbaik di bidangnya</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="<?php echo e(asset_url()); ?>images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
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
				<?php $__currentLoopData = $data['informations']->result(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
						<div class="col-xl-4 col-md-6 service_col">
							<a href="<?php echo e(base_url().'index.php/information/show/'.$information->id); ?>">
								<figure>
							        <img src="<?php echo e(asset_url().'images/'.$information->photo); ?>" 
							        height="200px" width="300px"  style="margin-left: 20px">
							        <figcaption>
							        	<b><?php echo e($information->title); ?></b>
							        	<small><?php echo e(date("Y/m/d")); ?></small>
							        </figcaption>
							    </figure>
							</a>	
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
							<?php $__currentLoopData = $data['photos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="https://www.instagram.com/klinikpuriintan/"><img src="<?php echo e($photo); ?>" class="img-thumbnail" width="350" style="margin-left: 20px"> </a>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<input type="hidden" id="marker_url" value="<?php echo e(asset_url()); ?>/images/marker.png">

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/klinikpuri/application/views/index.blade.php ENDPATH**/ ?>