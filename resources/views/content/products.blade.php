@extends('master')

@section('main_content')

<section id="gallery" class="p-0 line-effect">

  <div class="container ">
    <h1 class=" text-center text-regular display-2">{{$products[0]->ctitle}}</h2>
  </div>
  <div class="container ">
    <div class="row justify-content-center mt-5">
      @foreach($products as $product):
      <div class="col-sm-3">

        <div class="card rounded" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('lib/template/images/' . $product->pimage)}}"
            alt="{{$product->ptitle}} product image">
          <div class="card-body">
            <h5 class="card-title">{{$product->ptitle}}</h5>
            <p class="card-text">{!!$product->particle!!}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item h3">Price : ${!!$product->price!!} </li>
          </ul>
          <div class="card-body">
            <div class="btn-group">
              @if(! Cart::get($product->id))
              <button data-id="{{$product->id}}" class="card-link btn btn-primary rounded btn-group-sm add-to-cart-btn"
                type="button">ADD TO CART</button>
              @else <button disabled="disabled" class="card-link btn btn-primary rounded btn-group-sm add-to-cart-btn"
                type="button">IN
                CART</button>
              @endif
              <a href="{{url('shop/'.$product->curl . '/' . $product->purl)}}"
                class="card-link btn btn-secondary ">Info</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

  </div>
  </div><!-- / container -->
  <div class="container">
    <div class="row ">
      <nav aria-label="pagination-center">
        <div class="pagination justify-content-center">
          {{$products->links()}}
        </div>
      </nav>
    </div>
  </div>
  </div>

</section>

<div class="spacer-2x">&nbsp;</div>


@endsection