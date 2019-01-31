@extends('master')

@section('main_content')




<div class="container">
  <header class="home-header parallax">
    <div class="header-content dark text-center">
      <h1 class="header-title text-dark mb-0">GALLERIO </h1>
      <p class="inner-space mb-0 text-white">Clean & Elegant Gallery Shop</p>
    </div><!-- / header-content -->
  </header>
</div><!-- / container -->

<section id="gallery" class="p-0 line-effect">
  <div class="container">
    <!-- gallery filter -->
    <ul class="gallery-filter list-inline text-center">
      <li><a href="#" data-group="all" class="active ml-2">SEE ALL</a></li>
      <li><a href="#" data-group="framed">FRAMED</a></li>
      <li><a href="#" data-group="print">PRINT</a></li>
      <li><a href="#" data-group="digital">DIGITAL</a></li>
      <li><a href="#" data-group="photography">PHOTOGRAPHY</a></li>
    </ul>
    <!-- / gallery filter -->
  </div><!-- / container -->
  <div class="container full-width">
    <h3 class="section-title hidden">GALLERY</h3>
    <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/product.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">AMAZING FRAMED ART</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Framed - From $29.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery tall-gallery" data-groups='["photography", "print"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/mgallery2.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">PRINTED PHOTOGRAPHY</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Print - From $14.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".print-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery3.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">ROSE GIRL PAINTING</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Framed - From $99.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery4.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">COLORFULL PAINTING</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Framed - From $69.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["photography", "print"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery5.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">GALLERY PHOTGRAPHY</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Photography, Print - From $4.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".print-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery tall-gallery" data-groups='["photography", "digital"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/mgallery6.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">SMOKE PHOTGRAPHY</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Photography, Framed - From $24.49
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["photography", "digital"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery7.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">PORTRAITS COLLECTION</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Photography, Digital - From $9.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".digital-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["photography", "print", "digital"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery8.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">COLORFULL FLOWER</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Photography, Print, Digital - From
                $23.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".digital-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

      <!-- gallery -->
      <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
        <figure class="gallery-item effect-bubba">
          <img src="lib/template/images/gallery9.jpg" alt="">
          <figcaption>
            <div class="hover-content">
              <h2 class="hover-title text-center text-white">REFLECTIONS</h2><!-- / hover-title -->
              <p class="gallery-info text-center text-white">Framed - From $74.99
                <span class="gallery-icons">
                  <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                  <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                </span>
                <!--/ gallery-icons -->
              </p><!-- / gallery-info -->
            </div><!-- / hover-content -->
          </figcaption>
        </figure><!-- / gallery-item -->
      </li><!-- / gallery -->

    </ul><!-- / gallery -->
  </div><!-- / container -->
</section>
<!-- / gallery -->

<div class="spacer-2x">&nbsp;</div>

<section id="clients" class="bg-white">
  <h4 class="text-center">HAPPY CLIENTS</h4>
  <div class="spacer spacer-line border-primary">&nbsp;</div>
  <div class="spacer">&nbsp;</div>
  <div class="container">
    <div id="clients-carousel" class="owl-carousel owl-theme">
      <img src="lib/template/images/client1.png" alt="">
      <img src="lib/template/images/client2.png" alt="">
      <img src="lib/template/images/client3.png" alt="">
      <img src="lib/template/images/client4.png" alt="">
      <img src="lib/template/images/client5.png" alt="">
      <img src="lib/template/images/client6.png" alt="">
      <img src="lib/template/images/client1.png" alt="">
      <img src="lib/template/images/client2.png" alt="">
      <img src="lib/template/images/client3.png" alt="">
      <img src="lib/template/images/client4.png" alt="">
      <img src="lib/template/images/client5.png" alt="">
      <img src="lib/template/images/client6.png" alt="">
    </div><!-- / owl-carousel -->
    <!-- / clients carousel -->

  </div><!-- / container -->
</section><!-- / clients -->

@endsection