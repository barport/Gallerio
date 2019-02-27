<div class="top-menu top-menu-primary p-4 fixed-top ">
  <div class="container">
    <p>
      <span class="social margin-fix left">
        <a class="no-margin" href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </span>
      <span class="right">
        @if(! Session::has('user_id'))
        <a href="{{url('user/signin')}}">
          <span><i class="fas fa-sign-in-alt"></i> Login</span></a>
        <a href="{{url('user/signup')}}">
          <span><i class="fas fa-user-plus"></i> Register</span></a>

        @else
        <a href="{{url('user/profile')}}"><i class="fas fa-user"></i> {{Session::get('user_name')}}</a>
        @if(Session::has('is_admin'))
        <a href="{{url('cms/dashboard')}}"><i class="fas fa-tools"></i> Admin Panel</a>
        @endif
        <a href="{{url('user/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        @endif
      </span>
    </p>
  </div><!-- / container -->
</div><!-- / top-menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-white custom-menu split-menu">


  <div class="container mt-5 pt-3">
    <a class="navbar-brand m-auto" href="{{url('./')}}"><img src="lib/template/images/logo-icon.png" alt=""></a><br>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-toggle-1"
      aria-controls="navbar-toggle-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
      <span class="sr-only">Toggle navigation</span>
    </button><!-- / navbar-toggler -->

    <a class="navbar-brand mobile-brand m-auto" href="#x"><img src="lib/template/images/logo-icon.png" alt=""></a>

    <div class="collapse navbar-collapse" id="navbar-toggle-1">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item after-dropdown">
          <a class="nav-link first-menu-item " href="{{url('./')}}"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item after-dropdown">
          <a class="nav-link " href="{{url('about')}}"><i class="fas fa-info-circle"></i> About Us</a>
        </li>

        <li class="nav-item dropdown extra-dropdowns">
          <a class="nav-link has-dropdown-toggle dropdown-toggle" href="{{url('shop')}}"><i
              class="fas fa-shopping-bag"></i> Shop</a>

          @foreach($categories as $categorie)

          <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
            <div class="cart-small text-center">
              <img src="{{asset('lib/template/images/'. $categorie['cimage'])}}" alt="">
              <p><a href="{{url('shop/'. $categorie['curl'])}}" class="text-black">{{$categorie['ctitle']}}</a></p>
            </div>
            @endforeach

        </li>
        @foreach($menu as $item)
        <li class="nav-item after-dropdown">
          <a class="nav-link " href="{{url($item['url'])}}" id="dropdown3" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{$item['link']}}</a>
        </li>
        @endforeach
      </ul><!-- / navbar-nav -->
    </div><!-- / navbar-collapse -->

    <div class="collapse navbar-collapse" id="navbar-toggle-2">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link before-count" href="{{url('contact')}}"><i class="fas fa-envelope"></i> Contact</a>
        </li>
        @if(Cart::getTotalQuantity() > 0)
        <li class="nav-item dropdown extra-dropdowns">
          <a class="nav-link last-menu-item has-dropdown-toggle dropdown-toggle" href="{{url('checkout')}}"
            id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
              class="fas fa-shopping-cart"></i>
            Shopping Cart
            <span class="count count-primary">
              {{Cart::getTotalQuantity()}}</span></a>

          @foreach(Cart::getContent()->toArray() as $item)

          <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
            <div class="cart-small">
              <img src="{{asset('lib/template/images/'.$item['attributes']['image'])}}" alt="">
              <p><a href="#x" class="text-black">{{$item['name']}}</a> <br> <span>{{$item['price']}}</span></p>
              <a href="{{url('shop/remove-item?pid=' . $item['id'])}}"> <i class="md-icon dp14 close-icon">close</i></a>
            </div><!-- / cart-small -->
            @endforeach

            <p class="text-center cart-small-total"><b>SubTotal : ${{Cart::getTotal()}}</b></p>
            <div class="cart-small-footer text-center">
              <div class="row">
                <div class="col-sm-6">
                  <a href="{{url('shop/cart')}}" class="mini-cart-btn"><i class="md-icon dp12">shopping_cart</i>
                    <span class="va-middle"><b>CART</b></span></a>
                </div><!-- / column -->
                <div class="col-sm-6">
                  <a href="{{url('shop/checkout')}}" class="mini-cart-btn mb-0"><i class="md-icon dp12 ">exit_to_app</i>
                    <span class="va-middle"><b>CHECKOUT</b></span></a>
                </div><!-- / column -->
              </div><!-- / row -->
            </div><!-- / cart-small-footer -->
          </div><!-- / dropdown-menu -->
          @else
          <a href="{{url('shop/cart')}}" class="nav-link last-menu-item"><i class="fas fa-shopping-cart"></i> Shopping
            Cart</a>

          @endif
        </li><!-- / dropdown -->
      </ul><!-- / navbar-nav -->
    </div><!-- / navbar-collapse -->
  </div><!-- / container -->
</nav><!-- / split-navbar -->
<!--  End Header   -->