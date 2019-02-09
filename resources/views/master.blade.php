<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bootstrap 4 Template">
  <meta name="author" content="kingstudio.ro">
  <!-- Favicon -->
  <link rel="icon" href="lib/template/images/favicon.png">
  <!-- Site Title -->


  <title>{{$pageTitle}}</title>




  <!-- Bootstrap 4 core CSS -->
  <link href="{{ asset('lib/template/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom Styles -->
  <link href="{{ asset('lib/template/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/template/css/products.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/template/css/animate.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/template/css/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="lib/template/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
  <script>
    var BASE_URL = "{{url('')}}/";
  </script>
</head>

<body>

  <div id="preloader">
    <div class="preloader">
      <span></span>
      <span></span>
    </div>
  </div>


  <div class="top-menu top-menu-primary">
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
          <a href="{{url('user/signin')}}"><i class="fas fa-user mr-1"></i>
            <span>Login</span></a>
          <a href="{{url('user/signup')}}"><i class="fas fa-lock mr-1"></i>
            <span>Register</span></a>

          @else
          <a href="url('user/profile')">{{Session::get('user_name')}}</a>
          @if(Session::has('is_admin'))
          <a href="{{url('cms/dashboard')}}">Admin Panel</a>
          @endif
          <a href="{{url('user/logout')}}">Logout</a>
          @endif
        </span>
      </p>
    </div><!-- / container -->
  </div><!-- / top-menu -->

  <nav class="navbar navbar-expand-lg navbar-light bg-white custom-menu split-menu">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-toggle-1"
        aria-controls="navbar-toggle-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button><!-- / navbar-toggler -->

      <a class="navbar-brand mobile-brand m-auto" href="#x"><img src="lib/template/images/logo-icon.png" alt=""></a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-toggle-2"
        aria-controls="navbar-toggle-2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <span class="sr-only">Toggle navigation</span>
      </button><!-- / navbar-toggler -->

      <div class="collapse navbar-collapse" id="navbar-toggle-1">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item after-dropdown">
            <a class="nav-link first-menu-item active" href="{{url('./')}}">Home</a>
          </li>
          <li class="nav-item after-dropdown">
            <a class="nav-link " href="{{url('about')}}">About Us</a>
          </li>
          <li class="nav-item after-dropdown">
            <a class="nav-link " href="{{url('shop')}}">Shop</a>
          </li>
        </ul><!-- / navbar-nav -->
      </div><!-- / navbar-collapse -->

      <a class="navbar-brand m-auto" href="{{url('./')}}"><img src="lib/template/images/logo-icon.png" alt=""></a>

      <div class="collapse navbar-collapse" id="navbar-toggle-2">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link before-count" href="{{url('contact')}}">Contact</a>
          </li>
          <li class="nav-item dropdown extra-dropdowns">
            <a class="nav-link last-menu-item has-dropdown-toggle dropdown-toggle" href="{{url('checkout')}}"
              id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="fas fa-shopping-cart"></i>
              Shopping Cart
              <span class="count count-primary">
                {{Cart::getTotalQuantity()}}</span></a>

            @if(Cart::getTotalQuantity() > 0)
            @foreach(Cart::getContent()->toArray() as $item)

            <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
              <div class="cart-small">
                <img src="lib/template/images/product-small1.jpg" alt="">
                <p><a href="#x" class="text-black">{{$item['name']}}</a> <br> <span>{{$item['price']}}</span></p>
                <a href="#x"> <i class="md-icon dp14 close-icon">close</i></a>
              </div><!-- / cart-small -->

              <p class="text-center cart-small-total"><b>SubTotal : ${{Cart::getTotal()}}</b></p>
              <div class="cart-small-footer text-center">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="{{url('shop/cart')}}" class="mini-cart-btn"><i class="md-icon dp12">shopping_cart</i>
                      <span class="va-middle"><b>CART</b></span></a>
                  </div><!-- / column -->
                  <div class="col-sm-6">
                    <a href="{{url('shop/checkout')}}" class="mini-cart-btn mb-0"><i
                        class="md-icon dp12 ">exit_to_app</i>
                      <span class="va-middle"><b>CHECKOUT</b></span></a>
                  </div><!-- / column -->
                </div><!-- / row -->
              </div><!-- / cart-small-footer -->
            </div><!-- / dropdown-menu -->
            @endforeach
            @endif
          </li><!-- / dropdown -->
        </ul><!-- / navbar-nav -->
      </div><!-- / navbar-collapse -->
    </div><!-- / container -->
  </nav><!-- / split-navbar -->
  <!--  End Header   -->

  <main class="my-5">
    @if($errors->any())
    <div class="container">
      <div class="row">
        <div class="col-8  m-auto">
          <div class="alert alert-danger rounded">
            <ul>
              @foreach($errors->all() as $error)
              <li class="text-white">{{$error}}</li>
              @endforeach
            </ul>
          </div>

        </div>
      </div>
    </div>
    @endif
    @yield('main_content')
  </main>


  <!-- Start Footer !!! -->


  <div class="footer-widgets">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="widget">
            <img src="lib/template/images/logo-icon.png" alt="logo" class="footer-logo">
            <p class="mb-3">Vivamus sodales eleifend sem eu malesuada nunc.</p>
          </div><!-- / widget -->
        </div><!-- / column-->

        <div class="col-lg-3 text-center">
          <div class="widget">
            <h3 class="widget-title">USEFUL LINKS</h3>
            <ul class="footer-list pl-0 mb-0">
              <li class="mb-3"><a href="#x">Privacy Policy</a></li>
              <li class="mb-3"><a href="#x">Terms &amp; Conditions</a></li>
              <li class="mb-3"><a href="#x">News &amp; Updates</a></li>
            </ul>
          </div><!-- / widget -->
        </div><!-- / column-->

        <div class="col-lg-3 text-center">
          <div class="widget">
            <h3 class="widget-title">CATEGORIES</h3>
            <ul class="footer-list pl-0 mb-0">
              <li class="mb-3"><a href="#x">Framed</a></li>
              <li class="mb-3"><a href="#x">Print</a></li>
              <li class="mb-3"><a href="#x">Digital</a></li>
            </ul>
          </div><!-- / widget -->
        </div><!-- / column-->

        <div class="col-lg-3 text-center">
          <div class="widget">
            <h3 class="widget-title">CONTACT US</h3>
            <ul class="footer-list pl-0 mb-0">
              <li class="mb-3"><a href="tel:01234567890"><i class="fas fa-phone mr-2"></i> 0123 456 7890</a></li>
              <li class="mb-3"><a href="mailto:info@youriste.com"><i class="fas fa-envelope mr-2"></i>
                  info@yoursite.com</a></li>
              <li class="mb-3"><a href="#x"><i class="fab fa-twitter mr-2"></i> @GallerioTwitter</a></li>
            </ul>
          </div><!-- / widget -->
        </div><!-- / column-->
      </div><!-- / row -->
    </div><!-- / container -->
  </div><!-- / footer-widgets -->

  <footer class="bg-white">
    <div class="container-fluid text-center">
      <p>© 2019 <b>galleriO</b> by Bar Portnoy . All Rights
        Reserved.</p>
    </div><!-- / container-fluid -->
  </footer>

  <!-- modals -->


  <!-- Core JavaScript -->
  <script src="{{asset('lib/template/js/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
    integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
  <script src="{{asset('lib/template/js/bootstrap.min.js')}}"></script>
  <!-- / Core JavaScript -->

  <!-- preloader -->
  <script src="{{asset('lib/template/js/preloader.js')}}"></script>
  <!-- / preloader -->



  <!-- toaster-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


  <!-- /toaster-->
  <!-- gallery Script -->
  <script src="{{asset('lib/template/js/jquery.shuffle.min.js')}}"></script>
  <script src="{{asset('lib/template/js/gallery.js')}}"></script>
  <script src="{{asset('lib/template/js/app.js')}}"></script>
  @if(Session::has('sm'))
  <script>
    @if (Session:: has('toastrpos'))
    toastr.options.positionClass = "{{Session::get('toastrpos')}}";
    @else
    toastr.options.positionClass = "toast-bottom-center";
    @endif
    toastr.success("{{Session::get('sm')}}");
  </script>
  @endif



</body>

</html>