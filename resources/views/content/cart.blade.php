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
  <table class="shopping-cart">
    <thead>
      <tr>
        <th class="image">&nbsp;</th>
        <th>PRODUCT</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <tr class="cart-item">
        <td class="image"><a href="#"><img src="images/product-small1.jpg" alt=""></a></td>
        <td><a href="#x"><b>Amazing Framed Art</b></a></td>
        <td>$29.99</td>
        <td class="qty"><input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="form-control qty"
            size="4"></td>
        <td>$29.99</td>
        <td class="remove"><a href="#x" class="btn btn-danger-filled x-remove">×</a></td>
      </tr>
      <tr class="cart-item">
        <td class="image"><a href="#"><img src="images/product-small2.jpg" alt=""></a></td>
        <td><a href="#x"><b>Printed Photography</b></a></td>
        <td>$14.99</td>
        <td class="qty"><input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="form-control qty"
            size="4"></td>
        <td>$14.99</td>
        <td class="remove"><a href="#x" class="btn btn-danger-filled x-remove">×</a></td>
      </tr>
    </tbody>
  </table>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="cart-features" class="bg-white">
  <div class="container">
    <div class="row cart-footer">
      <div class="coupon col-md-6 mt-1 mb-1">
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" id="coupon-code" placeholder="Coupon Code">
          <span class="input-group-btn">
            <button class="btn btn-black rectangle ml-3" type="button"><span>APPLY COUPON</span></button>
          </span>
        </div>
      </div><!-- / input-group -->
      <div class="update-cart col-md-6 mt-1 mb-1">
        <button class="btn btn-black rectangle" type="submit"><span>UPDATE CART</span></button>
      </div><!-- / update-cart -->

      <div class="col-md-6 cart-total">
        <h4 class="pb-3">CART TOTAL</h4>
        <p>Subtotal: <span class="text-primary">$44.98</span></p>
        <p>Shippping: <span class="text-primary">$5</span></p>
        <p>Total: <span class="text-primary">$49.98</span></p>
      </div><!-- / cart-total -->

      <div class="col-md-6 cart-checkout">
        <a href="checkout.html" class="btn btn-black rectangle mt-1 mb-1"><i class="lnr lnr-exit"></i> <span>PROCEED
            TO CHECKOUT</span></a>
      </div><!-- / cart-checkout -->
    </div>
  </div><!-- / container -->
</section><!-- / cart-features -->



<footer class="bg-white">
  <div class="container-fluid text-center">
    <p>© 2018 <b>Gallerio</b> by <a href="https://kingstudio.ro" target="_blank">KingStudio</a>. All Rights Reserved.</p>
  </div><!-- / container-fluid -->
</footer>

<!-- modals -->

<!-- login-modal -->
<div class="modal fade login-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">LOG IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- / modal-header -->
      <div class="modal-body">
        <div class="custom-form">
          <div class="form-wrapper">
            <input type="text" class="form-control mb-3" id="login-input" placeholder="Username or Email">
            <input type="password" class="form-control mb-3" id="login-password-input" placeholder="Password">
            <div class="form-inline-extras">
              <div class="left-area">
                <div class="checkbox checkbox-primary ml-2">
                  <label class="hidden"><input type="checkbox"></label>
                  <input id="checkbox5" type="checkbox">
                  <label for="checkbox5">
                    Remember Me
                  </label>
                </div><!-- / checkbox -->
              </div><!-- / left-area -->
              <div class="right-area">
                <a href="my-account.html" class="btn btn-primary rectangle">LOG IN</a>
              </div><!-- / right-area -->
            </div><!-- / form-inline-extras -->
            <div class="text-left mt-2">
              <a href="#x">Forgot your password?</a>
            </div><!-- / text-left -->
          </div><!-- / form-wrapper -->
        </div><!-- / custom-form -->
      </div><!-- / modal-body -->
    </div><!-- / modal-content -->
  </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / login-modal -->

<!-- register-modal -->
<div class="modal fade register-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">REGISTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- / modal-header -->
      <div class="modal-body">
        <div class="custom-form">
          <div class="form-wrapper">
            <input type="email" class="form-control mb-3" id="register-email" placeholder="Email Address">
            <input type="text" class="form-control mb-3" id="register-username" placeholder="Username">
            <input type="password" class="form-control mb-3" id="register-password-input" placeholder="Password">
            <input type="password" class="form-control mb-3" id="register-confirm-password" placeholder="Confirm Password">
            <div class="form-inline-extras sixty-fourty">
              <div class="left-area">
                <div class="checkbox checkbox-primary ml-1">
                  <label class="hidden"><input type="checkbox"></label>
                  <input id="checkbox6" type="checkbox">
                  <label for="checkbox6">
                    I Accept <a href="#x">Terms &amp; Conditions</a>
                  </label>
                </div><!-- / checkbox -->
              </div><!-- / left-area -->
              <div class="right-area">
                <a href="#x" class="btn btn-primary rectangle">REGISTER</a>
              </div><!-- / right-area -->
            </div><!-- / form-inline-extras -->
          </div><!-- / form-wrapper -->
        </div><!-- / custom-form -->
      </div><!-- / modal-body -->
    </div><!-- / modal-content -->
  </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / register-modal -->

<!-- / modals -->

@endsection