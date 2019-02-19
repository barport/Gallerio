@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <div class="col-md-4 text-center">

    <h1 class="h2">Add a new menu</h1>
  </div>
  <p><a class="btn btn-secondary btn-lg" href="{{url('cms/menu/')}}"> <i class="fas fa-arrow-circle-left"></i> Go
      Back</a>
  </p>
</div>
<div class="row mt-5 m-auto">
  <div class="col-md-4 bg-secondary rounded">

    <form action="{{url('cms/menu')}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <div class="form-group font-weight-bold ">
        <label class="mt-3" for="link"> <span class="text-danger">*</span> Link : </label>
        <input value="{{old('link')}}" class="form-control text-dark origin-text" type="text" name="link" id="link">

        <label class="mt-3" for="url"> <span class="text-danger">*</span> Url : </label>
        <input value="{{old('url')}}" class="form-control text-dark target-text " type="text" name="url" id="url">

        <label class="mt-3" for="title"> <span class="text-danger">*</span> Title : </label>
        <input value="{{old('title')}}" class="form-control text-dark" type="text" name="title" id="title">

        <div class="form-group mt-4">
          <input class="btn btn-primary btn-block" name="submit" type="submit" value="Save">
        </div>
      </div>
    </form>

  </div>
</div>
@endsection