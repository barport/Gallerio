@extends('master')

@section('main_content')


<div class="container">
  <header class="cart-header parallax">
    <div class="header-content dark text-center">
      <h1 class="header-title mb-0 text-dark">SHOPPING CART</h1>
      <p class="inner-space mb-0 text-dark">Clean & Elegant Gallery Shop</p>
    </div><!-- / header-content -->
  </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<div class="container">


  @if($cart)
  <table class="shopping-cart">
    <thead>
      <tr>
        <th class="image">&nbsp;</th>
        <th>PRODUCT</th>
        <th>QUANTITY</th>
        <th>PRICE</th>
        <th>SUB TOTAL</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cart as $item)
      <tr class="cart-item">
        <td class="image"><img src="{{asset('lib/template/images/illustration1.jpg')}}" alt=""></td>
        <td><a href="#x"><b>{{$item['name']}}</b></a></td>
        <td class="text-center">
          <a href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=minus')}}" class="update-cart"> <i
              class="fas fa-minus"></i> </a>
          <input type="text" size="1" id="item-quantity" class="text-center" value="{{$item['quantity']}}">
          <a href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=plus')}}" class="update-cart"> <i
              class="fas fa-plus"></i> </a>
        </td>
        <td>${{$item['price']}}</td>
        <td>${{$item['quantity'] * $item['price']}}</td>
        <td class=" text-center"><a class="text-danger" href="{{url('shop/remove-item?pid=' . $item['id'])}}"> <i
              class="fas fa-trash-alt"></i> </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="update-cart col-md-6 mt-1 mb-1 float-right">
    <a href="{{url('shop/clear-cart')}}" class="btn btn-secondary">Clear Cart</a>
  </div><!-- / update-cart -->
</div><!-- / container -->

<div class="container">

  <div class="col-md-4">
    <div class="cart-total bg-secondary rounded pt-3 text-center">
      <h4 class="pb-3">CART TOTAL</h4>
      <p>Subtotal: <span class="text-primary">${{Cart::getTotal()}}</span></p>
      <p>Shippping: <span class="text-primary">$15.99</span></p>
      <p>Total: <span class="text-primary">${{Cart::getTotal() + 15.99}}</span></p>
    </div><!-- / cart-total -->
  </div>
</div>
<div class="container mb-3 pb-3">

  <div class="col-md-3 float-right">
    <a href="{{url('shop/checkout')}}" class="btn btn-success rectangle mt-1 mb-1"><i class="lnr lnr-exit"></i> <span>
        ORDER NOW
      </span></a>
  </div><!-- / cart-checkout -->
  <div class="coupon col-md-6 mt-1 mb-1 float-right">
    <div class="input-group">
      <input type="text" class="form-control form-control-sm" id="coupon-code" placeholder="Coupon Code">
      <span class="input-group-btn">
        <button class="btn btn-black rectangle ml-3" type="button"><span>APPLY COUPON</span></button>
      </span>
    </div>
    @else

    <p class="pt-5 mt-5 text-center display-4"><i>No Items in Cart.</i></p>
    <p class="text-center mt-4">
      <a href="{{url('shop')}}" class="btn btn-warning btn-lg">Go Shop </a>
    </p>
    @endif
  </div><!-- / input-group -->
  <div class="spacer-2x">&nbsp;</div>





  @endsection