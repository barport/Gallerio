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
  <title>Gallerio - Gellery Shop Template</title>
  <!-- Bootstrap 4 core CSS -->
  <link href="{{ asset('lib/template/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom Styles -->
  <link href="{{ asset('lib/template/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/template/css/animate.css')}}" rel="stylesheet">
  <link href="{{ asset('lib/template/css/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="lib/template/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
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
          <a href="#x" data-toggle="modal" data-target=".login-modal"><i class="fas fa-user mr-1"></i> <span>Login</span></a>
          <a href="#x" data-toggle="modal" data-target=".register-modal"><i class="fas fa-lock mr-1"></i>
            <span>Register</span></a>
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
            <a class="nav-link" href="{{url('about')}}">About Us</a>
          </li>
          <li class="nav-item after-dropdown">
            <a class="nav-link" href="{{url('categories')}}">Categories</a>
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
            <a class="nav-link last-menu-item has-dropdown-toggle dropdown-toggle" href="#x" id="dropdown3" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Shopping Cart<span class="count count-primary">2</span></a>
            <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
              <div class="cart-small">
                <img src="lib/template/images/product-small1.jpg" alt="">
                <p><a href="#x" class="text-black">Amazing Framed Art</a> <br> <span>1 x $29.99</span></p>
                <a href="#x"> <i class="md-icon dp14 close-icon">close</i></a>
              </div><!-- / cart-small -->
              <div class="cart-small">
                <img src="lib/template/images/product-small2.jpg" alt="">
                <p><a href="#x" class="text-black">Printed Photography</a> <br> <span>1 x $14.99</span></p>
                <a href="#x"> <i class="md-icon dp14 close-icon">close</i></a>
              </div><!-- / cart-small -->
              <p class="text-left cart-small-total"><b>Subtotal: $44.98</b></p>
              <div class="cart-small-footer text-center">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="shopping-cart.html" class="mini-cart-btn"><i class="md-icon dp12 mr-1">shopping_cart</i>
                      <span class="va-middle"><b>VIEW CART</b></span></a>
                  </div><!-- / column -->
                  <div class="col-sm-6">
                    <a href="checkout.html" class="mini-cart-btn mb-0"><i class="md-icon dp12 mr-1">exit_to_app</i>
                      <span class="va-middle"><b>CHECKOUT</b></span></a>
                  </div><!-- / column -->
                </div><!-- / row -->
              </div><!-- / cart-small-footer -->
            </div><!-- / dropdown-menu -->
          </li><!-- / dropdown -->
        </ul><!-- / navbar-nav -->
      </div><!-- / navbar-collapse -->
    </div><!-- / container -->
  </nav><!-- / split-navbar -->

  <!--  End Header   -->


  @yield('main_content')


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

  <!-- product-modal -->
  <div class="modal fade product-modal framed-product" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!-- / modal-header -->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-6">
                <div id="product-slider" class="owl-carousel owl-theme carousel-full-nav">

                  <div class="slide one framed-product">
                  </div><!-- / slide-one -->

                  <div class="slide two framed-product">
                  </div><!-- / slide-two -->

                  <div class="slide three framed-product">
                  </div><!-- / slide-three -->

                </div><!-- / owl-carousel -->
              </div><!-- / column -->
              <div class="col-md-6">
                <h4 class="single-product-title">AMAZING FRAMED ART</h4>
                <h6 class="text-primary">FRAMED</h6>
                <p>Aliquam ut lacus iaculis, scelerisque libero sit amet, ultricies dolor. Proin
                  facilisis volutpat leo quis scelerisque. Fusce porttitor semper dolor, vel pulvinar
                  est ultricies in. Suspendisse at mi sed diam facilisis accumsan. Etiam convallis
                  viverra augue, eget scelerisque risus molestie</p>
                <div class="product-info pb-3 pt-3">

                  <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span class="text-black"><b>$29.99</b>
                      - <b>$79.99</b></span></p>

                  <p class="mb-3"><i class="far fa-folder-open text-muted mr-1"></i> Category: <a href="#x" class="text-black"><b>Framed</b></a></p>

                  <p class="mb-3"><i class="far fa-smile text-muted mr-1"></i> Rating: <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i></p>

                  <p class="mb-0 pt-1"><b>Select Quantity & Size:</b></p>

                  <form class="form-inline">
                    <input class="form-control qty m-2" type="number" value="1" id="number-input">

                    <select class="form-control selector shop-option m-2" id="inline-form-select-1">
                      <option value="1">S</option>
                      <option value="2">M</option>
                      <option value="3">L</option>
                      <option value="4">XL</option>
                    </select>
                  </form>
                </div><!-- / product-info -->
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container-fluid -->
        </div><!-- / modal-body -->
        <div class="modal-footer">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-4">
                <p class="mb-0 text-white creator-info"><img src="lib/template/images/creator.jpg" class="creator-image"
                    alt="">
                  <span><b>JOHN DOE</b></span> <span class="text-sm">Photographer &
                    Painter</span></p>
              </div><!-- / column -->

              <div class="col-md-4">
                <h3 class="text-center text-white mb-0 final-price">$29.99</h3>
              </div><!-- / column -->

              <div class="col-md-4 text-right">
                <a href="shopping-cart.html" class="btn btn-primary m-2">ADD TO CART</a>
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container -fluid -->
        </div><!-- / modal-footer -->
      </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
  </div><!-- / modal -->
  <!-- / product-modal -->

  <!-- product-modal -->
  <div class="modal fade product-modal print-product" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!-- / modal-header -->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-6">
                <div id="product-slider-2" class="owl-carousel owl-theme carousel-full-nav">

                  <div class="slide four framed-product">
                  </div><!-- / slide-one -->

                  <div class="slide five framed-product">
                  </div><!-- / slide-two -->

                  <div class="slide six framed-product">
                  </div><!-- / slide-three -->

                </div><!-- / owl-carousel -->
              </div><!-- / column -->
              <div class="col-md-6">
                <h4 class="single-product-title">PRINTED PHOTOGRAPHY</h4>
                <h6 class="text-primary">PRINT</h6>
                <p>Aliquam ut lacus iaculis, scelerisque libero sit amet, ultricies dolor. Proin
                  facilisis volutpat leo quis scelerisque. Fusce porttitor semper dolor, vel pulvinar
                  est ultricies in. Suspendisse at mi sed diam facilisis accumsan. Etiam convallis
                  viverra augue, eget scelerisque risus molestie</p>
                <div class="product-info pb-3 pt-3">

                  <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span class="text-black"><b>$14.99</b>
                      - <b>$44.99</b></span></p>

                  <p class="mb-3"><i class="far fa-folder-open text-muted mr-1"></i> Category: <a href="#x" class="text-black"><b>Print</b></a></p>

                  <p class="mb-3"><i class="far fa-smile text-muted mr-1"></i> Rating: <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <i class="far fa-star"></i></p>

                  <p class="mb-0 pt-1"><b>Select Quantity & Size:</b></p>

                  <form class="form-inline">
                    <input class="form-control qty m-2" type="number" value="1" id="number-input-3">

                    <select class="form-control selector shop-option m-2" id="inline-form-select-2">
                      <option value="1">S</option>
                      <option value="2">M</option>
                      <option value="3">L</option>
                      <option value="4">XL</option>
                    </select>
                  </form>
                </div><!-- / product-info -->
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container-fluid -->
        </div><!-- / modal-body -->
        <div class="modal-footer">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-4">
                <p class="mb-0 text-white creator-info"><img src="lib/template/images/creator2.jpg" class="creator-image"
                    alt="">
                  <span><b>LUCY DOE</b></span> <span class="text-sm">Photographer &
                    Editor</span></p>
              </div><!-- / column -->

              <div class="col-md-4">
                <h3 class="text-center text-white mb-0 final-price">$14.99</h3>
              </div><!-- / column -->

              <div class="col-md-4 text-right">
                <a href="shopping-cart.html" class="btn btn-primary m-2">ADD TO CART</a>
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container -fluid -->
        </div><!-- / modal-footer -->
      </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
  </div><!-- / modal -->
  <!-- / product-modal -->

  <!-- product-modal -->
  <div class="modal fade product-modal digital-product" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!-- / modal-header -->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-6">
                <div id="product-slider-3" class="owl-carousel owl-theme carousel-full-nav">

                  <div class="slide seven framed-product">
                  </div><!-- / slide-one -->

                  <div class="slide eight framed-product">
                  </div><!-- / slide-two -->

                  <div class="slide nine framed-product">
                  </div><!-- / slide-three -->

                </div><!-- / owl-carousel -->
              </div><!-- / column -->
              <div class="col-md-6">
                <h4 class="single-product-title">PORTRAITS COLLECTION</h4>
                <h6 class="text-primary">DIGITAL</h6>
                <p>Aliquam ut lacus iaculis, scelerisque libero sit amet, ultricies dolor. Proin
                  facilisis volutpat leo quis scelerisque. Fusce porttitor semper dolor, vel pulvinar
                  est ultricies in. Suspendisse at mi sed diam facilisis accumsan. Etiam convallis
                  viverra augue, eget scelerisque risus molestie</p>
                <div class="product-info pb-3 pt-3">

                  <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span class="text-black"><b>$9.99</b>
                      - <b>$26.99</b></span></p>

                  <p class="mb-3"><i class="far fa-folder-open text-muted mr-1"></i> Category: <a href="#x" class="text-black"><b>Digital</b></a></p>

                  <p class="mb-3"><i class="far fa-smile text-muted mr-1"></i> Rating: <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <i class="far fa-star"></i></p>

                  <p class="mb-0 pt-1"><b>Select Quantity & Size:</b></p>

                  <form class="form-inline">
                    <input class="form-control qty m-2" type="number" value="1" id="number-input-2">

                    <select class="form-control selector shop-option m-2" id="inline-form-select-3">
                      <option value="1">S</option>
                      <option value="2">M</option>
                      <option value="3">L</option>
                      <option value="4">XL</option>
                    </select>
                  </form>
                </div><!-- / product-info -->
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container-fluid -->
        </div><!-- / modal-body -->
        <div class="modal-footer">
          <div class="container-fluid">
            <div class="row vcenter">
              <div class="col-md-4">
                <p class="mb-0 text-white creator-info"><img src="lib/template/images/creator3.jpg" class="creator-image"
                    alt="">
                  <span><b>JOHANA DOE</b></span> <span class="text-sm">Photographer</span></p>
              </div><!-- / column -->

              <div class="col-md-4">
                <h3 class="text-center text-white mb-0 final-price">$9.99</h3>
              </div><!-- / column -->

              <div class="col-md-4 text-right">
                <a href="shopping-cart.html" class="btn btn-primary m-2">ADD TO CART</a>
              </div><!-- / column -->
            </div><!-- / row -->
          </div><!-- / container -fluid -->
        </div><!-- / modal-footer -->
      </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
  </div><!-- / modal -->
  <!-- / product-modal -->

  <!-- / modals -->

  <!-- Core JavaScript -->
  <script src="{{asset('lib/template/js/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
    crossorigin="anonymous"></script>
  <script src="{{asset('lib/template/js/bootstrap.min.js')}}"></script>
  <!-- / Core JavaScript -->

  <!-- preloader -->
  <script src="{{asset('lib/template/js/preloader.js')}}"></script>
  <!-- / preloader -->

  <!-- gallery Script -->
  <script src="{{asset('lib/template/js/jquery.shuffle.min.js')}}"></script>
  <script src="{{asset('lib/template/js/gallery.js')}}"></script>
  <script>
    $(document).ready(function () {
      if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function (e) {
          if (!$(this).hasClass("hover")) {
            $(this).addClass("hover");
          }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function (e) {
          e.preventDefault();
          e.stopPropagation();
          if ($(this).closest(".img").hasClass("hover")) {
            $(this).closest(".img").removeClass("hover");
          }
        });
      } else {
        // handle the mouseenter functionality
        $(".img").mouseenter(function () {
          $(this).addClass("hover");
        })
          // handle the mouseleave functionality
          .mouseleave(function () {
            $(this).removeClass("hover");
          });
      }
    });
  </script>
  <!-- / gallery Script -->

  <!-- Owl Carousel -->
  <script src="{{asset('lib/template/js/owl.carousel.min.js')}}"></script>
  <script>
    $('#product-slider').owlCarousel({
      loop: false,
      margin: 10,
      smartSpeed: 1000,
      nav: true,
      dots: true,
      navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
      items: 1,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    })
  </script>

  <script>
    $('#product-slider-2').owlCarousel({
      loop: false,
      margin: 10,
      smartSpeed: 1000,
      nav: true,
      dots: true,
      navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
      items: 1,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    })
  </script>

  <script>
    $('#product-slider-3').owlCarousel({
      loop: false,
      margin: 10,
      smartSpeed: 1000,
      nav: true,
      dots: true,
      navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
      items: 1,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    })
  </script>

  <script>
    $('#clients-carousel').owlCarousel({
      loop: true,
      margin: 100,
      dots: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  </script>
  <!-- / Owl Carousel -->

</body>

</html>