@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <div class="col-md-4 text-center">

    <h1 class="h2">Edit Content</h1>
  </div>
  <p><a class="btn btn-secondary btn-lg" href="{{url('cms/content')}}"> <i class="fas fa-arrow-circle-left"></i> Go
      Back</a>
  </p>
</div>
<div class="row mt-5 m-auto">
  <div class="col-md-8 bg-secondary rounded">

    <form action="{{url('cms/content/'. $item['id'])}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      {{method_field('PUT')}}
      <div class="form-group">
        <label for="menu-id" class="font-weight-bold"> <span class="text-danger">*</span>Menu Link </label>
        <select class="form-control" name="menu_id" id="menu-id">

          @foreach($menu as $row)
          <option @if($item['menu_id']==$row['id']) selected="selected" @endif value="{{$row['id']}}">{{$row['link']}}
          </option>
          @endforeach
        </select>
      </div>

      <div class="form-group font-weight-bold ">

        <label class="mt-3" for="title" class="font-weight-bold"> <span class="text-danger">*</span> Title : </label>
        <input value="{{$item['title']}}" class="form-control text-dark" type="text" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="article" class="font-weight-bold"> <span class="text-danger">*</span> Article : </label>
        <textarea name="article" id="article" class="form-control">{{$item['article']}}</textarea>
      </div>
      <div class="form-group mt-4">
        <input class="btn btn-primary btn-block" name="submit" type="submit" value="Update">
      </div>
    </form>

  </div>
</div>
@endsection