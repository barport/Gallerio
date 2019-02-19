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
  @include('inc.css_header')
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


  @include('inc.topmenu')


  <main class="my-5">
    @include('inc.errors_messages')
    @yield('main_content')
  </main>


  @include('inc.footer')


  @include('inc.js_footer')

</body>

</html>