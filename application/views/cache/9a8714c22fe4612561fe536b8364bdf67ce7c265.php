
<?php $__env->startSection('content'); ?>

  <!-- Page Content -->
  <div class="container" style="padding-top: 120px;">

    <div class="row">

      <div class="col-lg-2" style="padding-top: 120px">

      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-8" id="title">
        <h2 class="my-4" ><?php echo e($data['information']->title); ?></h2>
        
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <img class="d-block img-fluid" src="<?php echo e(asset_url().'images/'.$data['information']->photo); ?>" style="width: 740px;height: 400px">
        </div>

        <div class="row">

            <div class="card h-100">
              <div class="card-body">
                <p class="card-text">
                  <?php echo $data['information']->content; ?>

                </p>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/klinikpuri/application/views/informations.blade.php ENDPATH**/ ?>