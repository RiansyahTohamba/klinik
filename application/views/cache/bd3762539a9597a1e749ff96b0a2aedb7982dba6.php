
<?php $__env->startSection('content'); ?>

  <!-- Page Content -->
  <div class="container" style="padding-top: 120px;">

    <div class="row">

      <div class="col-lg-3" style="padding-top: 120px">
        <div class="list-group">
          <?php $__currentLoopData = $data['services']->result(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(base_url().'index.php/services/show/'.$element->id.'#title'); ?>" class="list-group-item"><?php echo e($element->name); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>

      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-8" id="title">
        <h2 class="my-4" ><?php echo e($data['service']->name); ?></h2>

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <?php $counter=0;;
             ?>

            <?php $__currentLoopData = $data['photos']->result(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="carousel-item <?php echo e(($counter>0) ? '' : 'active'); ?>">
                <img class="d-block img-fluid" src="<?php echo e(asset_url().'images/'.$element->url); ?>" style="width: 740px;height: 400px">
              </div>  
              <?php $counter++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

            <div class="card h-100">
              <div class="card-body">
                <p class="card-text"><?php echo e($data['service']->description); ?> </p>
              </div>
            </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <br>
  <!-- /.container -->
  <script src="<?php echo e(asset_url()); ?>/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/klinikpuri/application/views/services.blade.php ENDPATH**/ ?>