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


  <div class="container mt-4 pt-4 m-auto ">


    <div class=" m-auto  card-rows row mt-5">
      @foreach($categories as $categorie):
      <a href="{{url('shop/'. $categorie['curl'])}}">

        <div class="card position-relative ml-4 " style="width: 40rem;">
          <img src="{{asset('lib/template/images/'. $categorie['cimage'])}}" alt="" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">{{$categorie['ctitle']}}</h4>
            <p class="card-text">{!!$categorie['carticle']!!}</p>

          </div>


        </div>
      </a>
      @endforeach

    </div>
  </div>

</section>


<div class="spacer-2x">&nbsp;</div>


@endsection