@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="text-center">Are You sure you want to delete this Product?</h1>

</div>
<div class="row mt-5  ">
  <div class="col-md-4 rounded mt-2">

    <form action="{{url('cms/products/'. $item_id)}}" method="POST" autocomplete="off" novalidate="novalidate">
      @csrf
      <div class="btn-group" role="group">
        {{method_field('DELETE')}}
        <input type="submit" value="Delete" class="btn btn-dark btn-group-lg btn-danger">
        <a href="{{url('cms/products')}}" class="btn btn-dark btn-group-lg btn-secondary">Cancel</a>

      </div>
    </form>

  </div>
</div>
@endsection