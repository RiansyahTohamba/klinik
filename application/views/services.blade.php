@extends('layouts.master')
@section('content')

  <!-- Page Content -->
  <div class="container" style="padding-top: 120px; margin-left: 120px">

    <div class="row">

      <div class="col-lg-3" style="padding-top: 120px">
        <div class="list-group">
          <a href="#" class="list-group-item">Kebidanan</a>
          <a href="#" class="list-group-item">Poli Gigi</a>
          <a href="#" class="list-group-item">Kebidanan</a>
          <a href="#" class="list-group-item">Poli Gigi</a>
          <a href="#" class="list-group-item">Kebidanan</a>
          <a href="#" class="list-group-item">Poli Gigi</a>
          
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-8">
        <h2 class="my-4">Kebidanan</h2>

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset_url()}}/images/room1.jpeg" style="width: 740px;height: 400px"  alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset_url()}}/images/room2.jpeg" style="width: 740px;height: 400px"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset_url()}}/images/room3.jpeg" style="width: 740px;height: 400px"  alt="Third slide">
            </div>
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

          <div class="col-lg-8 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <p class="card-text">Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla  blablabla blablabla blablabla  blablabla blablabla blablabla  blablabla blablabla blablabla  blablabla blablabla blablabla </p>
              </div>
            </div>
          </div>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <script src="{{asset_url()}}/js/bootstrap.bundle.min.js"></script>
@endsection