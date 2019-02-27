@extends('master')
@section('main_content')

<div class="container">
  <div class="row">
    <div class="col-12">
      @foreach($contents as $content)
      <div class="content mt-3 ">

        <h1 class="display-2 text-center mt-2 border-bottom">{{$content->title}}</h1>
        <div class="col-8 m-auto">

          <p class="mt-5 ">{!!$content->article!!}</p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>




@endsection