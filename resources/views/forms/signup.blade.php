@extends('master')

@section('main_content')

<div class="container">
  <div class="row mb-3 text-center">
    <div class="col-12 m-auto ">
      <h1 class="">Sign up to Gallerio</h1>
      <p>Fill the following blanks to register</p>

    </div>
  </div>
  <div class="row mt-3 ">
    <div class="col-md-6 bg-secondary rounded  m-auto p-4">
      <form action="" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="name"><span class="text-danger">*</span>Name</label>
          <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email"><span class="text-danger">*</span>Email</label>
          <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password"><span class="text-danger">*</span>Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group text-center">
          <input type="submit" value="Signup" name="submit" class="btn btn-primary rounded">
        </div>
      </form>
    </div>
  </div>
</div>


<div class="spacer-2x">&nbsp;</div>



@endsection