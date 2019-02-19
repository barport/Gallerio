@php
$menu = App\Menu::all()->toArray();
$errors_top = true;
$pageTitle = 'Page Not Found'
@endphp
@extends('master')

@section('main_content')

<div class="container">
  <div class="row">

    <div class="col-8 m-auto">

      <span class="display-2">ERROR 404 </span>
      <p>Page Not Found</p>
    </div>



  </div>
</div>

@endsection