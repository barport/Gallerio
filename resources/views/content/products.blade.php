@extends('master')

@section('main_content')

<section id="gallery" class="p-0 line-effect">
  <div class="container">
    <!-- gallery filter -->
    <div class="container ">
      <h2 class="title text-center text-regular">{{$products[0]->ctitle}}</h2>
    </div><!-- / container -->
    <!-- / gallery filter -->
  </div><!-- / container -->
  <div class="container full-width">
    <h3 class="section-title hidden">GALLERY</h3>
    <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
      <!-- gallery -->

      @foreach($products as $product):
      <li class="col-md-6 col-lg-4 gallery">
        <figure class="gallery-item effect-bubba">
          <img src="{{asset('lib/template/images/' . $product->pimage)}}" alt="{{$product->ptitle}} product image">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">
                {{$product->ptitle}}
              </h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">{{$product->particle}} - ${{$product->price}}
                <span class="gallery-icons">
                  <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}" class="gallery-button" data-toggle="modal">
                    Details</a>
                  <a href="{{url('cart')}}" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->
      @endforeach
    </ul><!-- / gallery -->
  </div><!-- / container -->
</section>
<!-- / gallery -->

<div class="spacer-2x">&nbsp;</div>


@endsection