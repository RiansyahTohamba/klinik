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
					'web_banner_1.jpg'=> '',
					'web_banner_2.jpg'=> '',
					'web_banner_3.jpg'=> '',
					'web_banner_4.jpg'=> '',
					'web_banner_5.jpg'=> '',
				);
				foreach ($slides as $key => $value) {
					
					?>
					<div class="owl-item">
						<div class="background_image" style="background-image:url(<?php echo e(asset_url().'images/'.$key); ?>)"></div>
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

	<div  class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						</div>
						
						<div class="cta_content">
							<div class="section_title text-center">
								<h4>Hubungi Kami</h4>
							</div>
							<div>
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
	
	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h4>Kenapa Memilih Kami ?</h4></div>
				</div>
			</div>
			<div class="row services_row d-flex justify-content-center">
				<div id="carouselWhyUsControls" class="carousel slide slide_doctors" data-ride="carousel">
				  <div class="carousel-inner ">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/why_us_1.jpg'); ?>"  alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/why_us_2.jpg'); ?>"  alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/why_us_3.jpg'); ?>"  alt="Third slide">
				    </div>


				  </div>
				  <a class="carousel-control-prev" href="#carouselWhyUsControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselWhyUsControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
		</div>
	</div>
	<!-- Doctor Schedules -->
	
	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h4>Jadwal Dokter</h4></div>
				</div>
			</div>
			<div class="row services_row d-flex justify-content-center">
				<div id="carouselExampleControls" class="carousel slide slide_doctors" data-ride="carousel">
				  <div class="carousel-inner ">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/doctor_1.png'); ?>"  alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/doctor_2.png'); ?>"  alt="Second slide">
				    </div>

				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/doctor_3.png'); ?>"  alt="Third slide">
				    </div>

				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/doctor_4.png'); ?>"  alt="Third slide">
				    </div>

				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php echo e(asset_url().'images/doctor_5.png'); ?>"  alt="Third slide">
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


	<!-- Services -->

	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title"><h4>Info & Update</h4></div>
				</div>
			</div>
			<div class="row news">
				
				<!-- Service -->
				<?php $__currentLoopData = $data['informations']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-6">
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

	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_title">
							<h4>Kunjungi Kami</h4>
						</div>
					</div>
					<div class="row services_row">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.74882314722!2d107.00499961671271!3d-6.239039875109695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf96a031f9c798501!2sKlinik+Puri+Intan!5e0!3m2!1sen!2sid!4v1560491998345!5m2!1sen!2sid" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<iframe width="100%" height="300" src="https://www.youtube.com/embed/D4EtlrcjZlo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						
				</div>
			</div>
			<div class="row">
				<div class="col">
					<iframe width="100%" height="150" src="https://www.youtube.com/embed/D4EtlrcjZlo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						
				</div>
				<div class="col">
					<iframe width="100%" height="150" src="https://www.youtube.com/embed/D4EtlrcjZlo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="klinik_container">
		<div class="container">
			<div class="row">
				<div class="col text-center">

					
					<div class ="section_title">
						<a href="https://www.instagram.com/klinikpuriintan/">
							<img src="<?php echo e(asset_url()); ?>/images/instagram.jpg" height="70px">
					</a></div>
					<div class="row">
						<div class="ig-thumbnail col">
							<a href="https://www.instagram.com/klinikpuriintan/"><img src="<?php echo e($data['photos'][0]); ?>" class="img-thumbnail" width="300" style="margin-left: 20px"> </a>
						</div>
					</div>
					<div class="row">
						<div class="ig-thumbnail col">
							<a href="https://www.instagram.com/klinikpuriintan/"><img src="<?php echo e($data['photos'][1]); ?>" class="img-thumbnail" style="margin-left: 20px"> </a>
						</div>
						<div class="ig-thumbnail col">
							<a href="https://www.instagram.com/klinikpuriintan/"><img src="<?php echo e($data['photos'][2]); ?>" class="img-thumbnail" > </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<input type="hidden" id="marker_url" value="<?php echo e(asset_url()); ?>/images/marker.png">

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/klinikpuri/application/views/index.blade.php ENDPATH**/ ?>