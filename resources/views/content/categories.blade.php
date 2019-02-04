@extends('master')

@section('main_content')

<section id="gallery" class="p-0 mt-5 pt-3 line-effect">

  <div class="container full-width">
    <div class="foo">
      <span class="letter" data-letter="C">C</span>
      <span class="letter" data-letter="A">A</span>
      <span class="letter" data-letter="T">T</span>
      <span class="letter" data-letter="E">E</span>
      <span class="letter" data-letter="G">G</span>
      <span class="letter" data-letter="O">O</span>
      <span class="letter" data-letter="R">R</span>
      <span class="letter" data-letter="I">I</span>
      <span class="letter" data-letter="E">E</span>
      <span class="letter" data-letter="S">S</span>
    </div>
    <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
      <!-- gallery -->

      @foreach($categories as $categorie):
      <div class="col-sm-12 col-md-4 mt-4">
        <div class="card">
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
      </div><!-- / column -->

      @endforeach
    </ul><!-- / gallery -->
  </div><!-- / container -->
</section>
<!-- / gallery -->

<div class="spacer-2x">&nbsp;</div>


@endsection