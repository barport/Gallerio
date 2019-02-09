@extends('master')

@section('main_content')

<section id="gallery" class="">

  <div class="container">
    <header class="shop-header parallax">
      <div class="header-content dark text-center">
        <h1 class="header-title text-white  mb-0">CATEGORIES </h1>
        <p class="inner-space mb-0 text-white">Clean & Elegant Gallery Shop</p>
      </div><!-- / header-content -->
    </header>
  </div><!-- / container -->


  <div class="container full-width text-center">

    <!-- gallery -->

    @foreach($categories as $categorie):
    <div class="card col-md-4">
      <img src="{{asset('lib/template/images/'. $categorie['cimage'])}}" alt="" class="card-img-top">
      <div class="card-body">
        <h4 class="card-title">{{$categorie['ctitle']}}</h4>
        <p class="card-text">{!!$categorie['carticle']!!}</p>
        <div class="text-center">
          <br><br>
          <a href="{{url('shop/'. $categorie['curl'])}}" class="btn btn-primary pill">View Products</a>
        </div>
      </div><!-- / card-body -->
    </div><!-- / card -->
    @endforeach
  </div><!-- / container -->
</section>
<!-- / gallery -->

<div class="spacer-2x">&nbsp;</div>


@endsection