@extends('master')
@section('main_content')

<div class="container">
  <div class="row mt-5 mb-5 ">
    <div class="col-12">
      <div class="col-4 float-left">
        <p><img width="250" height="300" src="{{asset('lib/template/images/' . $product['pimage'])}}" alt="{{$product['ptitle']}} product image"></p>

      </div>
      <div class="col-6 float-right mt-5">
        <h1 class="display-2">{{$product['ptitle']}}</h1>
        <p class="text-monospace">{!!$product['particle']!!}</p>
        <p><b>Price : </b>${{$product['price']}}</p>
        <p>
          @if(! Cart::get($product['id']))
          <button data-id="{{$product['id']}}" class="btn btn-primary rounded add-to-cart-btn" type="button">ADD TO
            CART</button>
          @else
          <button disabled="disabled" class="btn btn-primary rounded add-to-cart-btn" type="button">IN CART</button>
          @endif
        </p>
      </div>

    </div>
  </div>
</div>

@endsection