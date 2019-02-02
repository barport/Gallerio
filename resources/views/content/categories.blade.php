@extends('master')

@section('main_content')

<section id="gallery" class="p-0 mt-5 pt-3 line-effect">
  <div class="container ">
    <h2 class="title text-center text-regular">CATEGORIES</h2>
  </div><!-- / container -->
  <div class="container full-width">
    <h3 class="section-title hidden">GALLERY</h3>
    <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
      <!-- gallery -->

      @foreach($categories as $categorie):
      <div class="col-sm-12 col-md-4 mt-4">
        <div class="card">
          <img src="{{asset('lib/template/images/'. $categorie['cimage'])}}" alt="" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">{{$categorie['ctitle']}}</h4>
            <p class="card-text">{{$categorie['carticle']}}</p>
            <div class="text-center">

              <a href="{{url('shop/'. $categorie['curl'])}}" class="btn btn-primary pill">View Products</a>
            </div>
          </div><!-- / card-body -->
        </div><!-- / card -->
      </div><!-- / column -->

      @endforeach
    </ul><!-- / gallery -->
  </div><!-- / container -->
</section>
<!-- / gallery -->

<div class="spacer-2x">&nbsp;</div>


@endsection