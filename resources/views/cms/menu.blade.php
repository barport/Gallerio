@extends('cms.cms_master')
@section('main_cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Site Menu</h1>
  <p><a class="btn btn-primary btn-lg" href="{{url('cms/menu/create')}}"> <i class="fas fa-plus-circle"></i> Add Menu
      Link</a>
  </p>
</div>
<div class="row mt-5">
  <div class="col-12">
    <table class="table table-striped text-center">
      <thead class="thead-dark h-2">
        <tr class="h4">
          <th>Link</th>
          <th>Title</th>
          <th>Updated At</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menu as $item)
        <tr class="h5">
          <td class="font-weight-bold">{{$item['link']}}</td>
          <td>{{$item['title']}}</td>
          <td>{{date('d/M/Y',strtotime($item['updated_at']))}}</td>
          <td>
            <a class="mr-2" href="{{url('cms/menu/'.$item['id'] . '/edit')}}"> <i class="fas fa-pencil-alt"></i>
              Edit</a> |
            <a class="ml-2" href="{{url('cms/menu/'. $item['id'])}}"> <i class="fas fa-trash-alt"></i> Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection