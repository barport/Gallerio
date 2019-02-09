@extends('master')

@section('main_content')

<div class="container">
  <div class="row mb-3 text-center">
    <div class="col-12 m-auto ">
      <h1 class="">Sign In to your account</h1>
      <p>Please Enter your email and password</p>

    </div>
  </div>
  <div class="row mt-3 ">
    <div class="col-md-6 bg-secondary rounded  m-auto p-4">
      <form action="" method="POST" novalidate="novalidate" autocomplete="off">
        @csrf
        <div class="form-group">
          <label for="email"><span class="text-danger">*</span>Email</label>
          <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password"><span class="text-danger">*</span>Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group text-center">

          @if(!empty ($auth_error))

          <span class="text-danger">{{$auth_error}}</span>
          <br>
          @endif
          <input type="submit" value="Signin" name="submit" class="btn btn-primary rounded">
        </div>
      </form>
    </div>
  </div>
</div>


<div class="spacer-2x">&nbsp;</div>



@endsection