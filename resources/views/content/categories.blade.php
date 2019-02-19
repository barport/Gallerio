@extends('master')

@section('main_content')

<section id="gallery" class="">

  <div class="container">
    <header class="shop-header parallax">
      <div class="header-content dark text-center">
        <h1 class="header-title text-white  mb-0">CATEGORIES </h1>
        <p class="inner-space mb-0 text-white">Clean & Elegant Gallery Shop</p>
      </div>
    </header>
  </div>


  <div class="container ">
    <div class="card-group mt-5">
      @foreach($categories as $categorie):
      <div class="card">
        <img src="{{asset('lib/template/images/'. $categorie['cimage'])}}" alt="" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">{{$categorie['ctitle']}}</h4>
          <p class="card-text">{!!$categorie['carticle']!!}</p>
          <div class="text-center mb-3">

            <a href="{{url('shop/'. $categorie['curl'])}}" class="btn btn-primary pill">View Products</a>

          </div>
        </div>

      </div>
      @endforeach
    </div>
  </div>

</section>


<div class="spacer-2x">&nbsp;</div>


@endsection