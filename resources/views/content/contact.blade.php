@extends('master')

@section('main_content')

<div class="container">
  <header class="contact-header parallax">
    <div class="header-content dark text-center">
      <h1 class="header-title mb-0 text-dark">CONTACT</h1>
      <p class="inner-space mb-0 text-dark">Get in touch with Us!</p>
    </div><!-- / header-content -->
  </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="contact-info">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-box inner-space text-center">
          <i class="fas fa-mobile-alt contact-icon mb-3"></i>
          <h5 class="box-title">PHONE</h5>
          <p class="box-description"><a href="tel:01234567890">0123 456 7890</a></p>
          <p class="box-description mb-0"><a href="tel:09876543210">0987 654 3210</a></p>
        </div><!-- / contact-box -->
      </div><!-- / column -->
      <div class="col-md-4">
        <div class="contact-box inner-space text-center">
          <i class="fas fa-map-marked-alt contact-icon mb-3"></i>
          <h5 class="box-title">LOCATION</h5>
          <p class="box-description">Miami, Florida</p>
          <p class="box-description mb-0">5 Shoham Street, Ramat-Gan</p>
        </div><!-- / contact-box -->
      </div><!-- / column -->
      <div class="col-md-4">
        <div class="contact-box inner-space text-center">
          <i class="far fa-envelope contact-icon mb-3"></i>
          <h5 class="box-title">EMAIL</h5>
          <p class="box-description"><a href="mailto:bartillerr@gmail.com">bartillerr@gmail.com</a></p>
        </div><!-- / contact-box -->
      </div><!-- / column -->
    </div><!-- / row -->
  </div><!-- / container -->
</section><!-- / contact-info -->

<div class="spacer-2x">&nbsp;</div>

<section id="contact" class="bg-white">
  <div class="container w50">
    <h2 class="section-title text-center mb-0">GET IN TOUCH</h2>
    <div class="spacer">&nbsp;</div>
    <p class="text-center">Quisque et bibendum purus. In non neque nec nisi laoreet rutrum. Vivamus maximus massa sed
      tellus convallis porta.</p>
    <div class="spacer">&nbsp;</div>
    <form id="contactForm" data-toggle="validator">
      <div class="row">
        <div class="col-md-6 sub-col-left">
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="*Name" required>
            <div class="help-block with-errors"></div>
          </div>
        </div><!-- / sub-column -->
        <div class="col-md-6 sub-col-right">
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="*Email" required>
            <div class="help-block with-errors"></div>
          </div>
        </div><!-- / sub-column -->
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control" id="subject" placeholder="Subject">
            <div class="help-block with-errors"></div>
          </div>
        </div><!-- / sub-column -->
        <div class="col-md-12">
          <div class="form-group">
            <textarea id="message" class="form-control" rows="5" placeholder="*Message" required></textarea>
            <div class="help-block with-errors text-area"></div>
          </div>
        </div><!-- / sub-column -->
      </div><!-- / row -->

      <div class="text-center">
        <button type="submit" id="form-submit" class="btn btn-submit btn-primary rectangle"><span>SEND
            MESSAGE</span></button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
      </div><!-- / text-center -->
    </form><!-- / contactform -->
  </div><!-- / container -->
</section><!-- / contact -->

@endsection