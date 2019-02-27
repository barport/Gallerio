@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <div class="col-md-4 text-center">

    <h1 class="h2">Edit Category</h1>
  </div>
  <p><a class="btn btn-secondary btn-lg" href="{{url('cms/categories/')}}"> <i class="fas fa-arrow-circle-left"></i> Go
      Back</a>
  </p>
</div>
<div class="row mt-5 m-auto">
  <div class="col-md-8 bg-secondary rounded">


    <form action="{{url('cms/categories/'. $item['id'])}}" enctype="multipart/form-data" method="POST"
      autocomplete="off" novalidate="novalidate">
      <input type="hidden" name="item_id" value="{{$item['id']}}">
      @csrf
      {{method_field('PUT')}}
      <div class="form-group font-weight-bold ">
        <label class="mt-3" for="title"> <span class="text-danger">*</span> Title : </label>
        <input value="{{$item['ctitle']}}" class="form-control text-dark origin-text" type="text" name="title"
          id="title">

        <label class="mt-3" for="url"> <span class="text-danger">*</span> Url : </label>
        <input value="{{$item['curl']}}" class="form-control text-dark target-text " type="text" name="url" id="url">

        <div class="form-group">
          <label for="article" class="font-weight-bold"> <span class="text-danger">*</span> Article : </label>
          <textarea name="article" id="article" class="form-control">{{$item['carticle']}}</textarea>
        </div>
        <div class="form-group">
          <label for="image">Change Category Image</label>
        </div>
        <div class="form-group">
          <img width=" 300" src="{{asset('lib/template/images/'.$item['cimage'])}}">
        </div>
        <div class="input-group mb-3">

          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input name="image" type="file" class="custom-file-input" id="image"
              aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Browse...</label>
          </div>
        </div>

        <div class="form-group mt-4">
          <input class="btn btn-primary btn-block" name="submit" type="submit" value="Update">
        </div>
      </div>
    </form>

  </div>
</div>
@endsection