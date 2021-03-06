@extends('layouts.master')
@section('content')

  <!-- Page Content -->
  <div class="container" style="padding-top: 120px;">

    <div class="row">

      {{-- <div class="col-lg-3" style="padding-top: 120px">
        <div class="list-group">
          @foreach ($data['services']->result() as $element)
            <a href="{{base_url().'index.php/services/show/'.$element->id.'#title' }}" class="list-group-item">{{$element->name}}</a>
          @endforeach 
        </div>

      </div> --}}
      <!-- /.col-lg-3 -->
      <div class="col-lg-8" id="title">
        <h2 class="my-4" >{{$data['service']->name}}</h2>

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <?php $counter=0;;
             ?>

            @foreach ($data['photos']->result() as $element)
              <div class="carousel-item {{($counter>0) ? '' : 'active'}}">
                <img class="d-block img-fluid" src="{{asset_url().'images/'.$element->url}}" style="width: 740px;height: 400px">
              </div>  
              <?php $counter++ ?>
            @endforeach
            
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
                <p class="card-text">{{$data['service']->description}} </p>
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
  <script src="{{asset_url()}}/js/bootstrap.bundle.min.js"></script>
@endsection