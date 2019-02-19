@extends('master')

@section('main_content')

<div class="container">
  <header class="checkout-header parallax">
    <div class="header-content dark text-center">
      <h1 class="header-title mb-0">CHECKOUT</h1>
      <p class="inner-space mb-0">Clean & Elegant Gallery Shop</p>
    </div><!-- / header-content -->
  </header>
</div><!-- / container -->

<section id="checkout" class="bg-white">
  <div class="container">
    <div class="row checkout-screen">
      <div class="col-md-9 checkout-form">
        <h4>CHECKOUT</h4>
        <p class="have-account space-bottom">Already have an account? <a href="#x" data-toggle="modal"
            data-target=".login-modal"><span>Login</span></a></p>
        <div class="row">
          <div class="col-md-6 sub-col-left">
            <input type="text" class="form-control mb-3" name="first-name" placeholder="*First Name" required="">
            <input type="text" class="form-control mb-3" name="last-name" placeholder="*Last Name" required="">
            <input type="email" class="form-control mb-3" name="email" placeholder="*Email" required="">

          </div>
          <div class="col-md-6 sub-col-right">
            <input type="tel" class="form-control mb-3" name="tel" placeholder="*Phone" required="">
            <input type="text" class="form-control mb-3" name="company" placeholder="Company">
            <input type="text" class="form-control mb-3" name="address-line" placeholder="*Address" required="">
          </div>
        </div><!-- / row -->

        <div class="row">
          <div class="col-md-6 sub-col-left">
            <select class="form-control mb-3" name="country">
              <optgroup label="Country:">
                <option value="usa">USA</option>
                <option value="australia">Australia</option>
                <option value="g-britain">Great Britain</option>
                <option value="sp">Spain</option>
              </optgroup>
            </select>
            <select class="form-control mb-3" name="state">
              <optgroup label="State:">
                <option value="s1">Florida</option>
                <option value="s2">VIC</option>
                <option value="s3">United Kingdom</option>
                <option value="s4">Catalonia</option>
              </optgroup>
            </select>
          </div>
          <div class="col-md-6 sub-col-right">
            <select class="form-control  mb-3" name="city">
              <optgroup label="State:">
                <option value="s1">Miami</option>
                <option value="s2">Melbourne</option>
                <option value="s3">London</option>
                <option value="s4">Barcelona</option>
              </optgroup>
            </select>
            <input type="text" class="form-control mb-3" name="zip" placeholder="Zip Code" required="">
          </div>
        </div><!-- / row -->

        <div class="checkout-form-footer">
          <textarea rows="6" class="form-control mb-3" name="message" placeholder="Message" required=""></textarea>
          <a href="{{url('thankyou')}}" class="btn btn-black rectangle"><span>CHECKOUT</span></a>
        </div><!-- / checkout-form-footer -->

      </div><!-- / checkout-form -->

      <div class="col-md-3 checkout-total">
        <h4>CART TOTAL: <span class="text-primary">${{Cart::getTotal()}}</span></h4>
        <p class="text-sm">*The price includes shipping and taxes.</p>
        <div class="cart-total-footer">
          <a href="{{url('shop/cart')}}" class="btn btn-black rectangle mt-2"><span>BACK TO CART</span></a>
          <a href="{{url('shop')}}" class="btn btn-primary rectangle mt-2"><span>CONTINUE SHOPPING</span></a>
        </div><!-- / cart-total-footer -->
      </div><!-- / checkout-total -->

    </div><!-- / row -->
  </div><!-- / container -->
</section><!-- / checkout -->

@endsection