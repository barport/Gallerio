@if($errors_top && $errors->any())
<div class="container">
  <div class="row">
    <div class="col-8  m-auto">
      <div class="alert alert-danger rounded">
        <ul>
          @foreach($errors->all() as $error)
          <li class="text-white">{{$error}}</li>
          @endforeach
        </ul>
      </div>

    </div>
  </div>
</div>
@endif