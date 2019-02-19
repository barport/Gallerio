<!doctype html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <title>Gallerio | Admin Panel</title>
  @include('inc.css_header')
  <link href="{{ asset('lib/template/css/dashboard.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <link rel="icon" href="{{asset('lib/template/images/favicon.png')}}">
</head>

<body>
  <nav class="navbar fixed-top bg-dark flex-md-nowrap p-0 shadow ">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0    text-white text-center" href="{{url('cms/dashboard')}}">
      <i class="fab fa-cpanel fa-4x "></i></a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">

        <a target="_blank" class="nav-link" href="{{url('')}}">Back To Site</a>
        <a class="nav-link" href="{{url('user/logout')}}">Logout</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid mt-5">
    <div class="row ">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5 bg-primary ">
        <div class="sidebar-sticky ">
          <ul class="nav flex-column ">
            <li class="nav-item mt-2">
              <a class="nav-link bg-primary text-white border-bottom p-3 pt-4" href="{{url('cms/dashboard')}}"><i
                  class="fas fa-tachometer-alt"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-white border-bottom p-3" href="{{url('cms/menu')}}"><i
                  class="fas fa-align-justify"></i> Menu </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-primary text-white border-bottom p-3" href="{{url('cms/content')}}"><i
                  class="fas fa-text-width"></i> Content </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-white border-bottom p-3" href="{{url('cms/categories')}}">Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-primary text-white border-bottom p-3" href="{{url('cms/products')}}">Products </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-dark text-white border-bottom p-3" href="{{url('cms/Orders')}}"><i
                  class="fas fa-list-ul"></i> Orders </a>
            </li>
          </ul>




        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">

        @yield('main_cms_content')
        @if( $errors->any())

        <div class="row">
          <div class="col-md-3 ml-5 bg-warning  rounded ">
            <div class="alert  mt-3 m-auto">
              <ul>
                @foreach($errors->all() as $error)
                <li class="text-white h5"><i class="fas fa-exclamation-triangle"></i> {{$error}}</li>
                @endforeach
              </ul>
            </div>

          </div>
        </div>
        @endif

      </main>
    </div>
  </div>
  @include('inc.js_footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
  <script>
    $('#article').summernote({
      height: 300

    });
  </script>
</body>

</html>