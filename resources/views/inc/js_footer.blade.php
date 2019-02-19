<script src="{{asset('lib/template/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{asset('lib/template/js/bootstrap.min.js')}}"></script>
<!-- / Core JavaScript -->

<!-- preloader -->
<script src="{{asset('lib/template/js/preloader.js')}}"></script>
<!-- / preloader -->



<!-- toaster-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- /toaster-->
<!-- gallery Script -->
<script src="{{asset('lib/template/js/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('lib/template/js/gallery.js')}}"></script>
<script src="{{asset('lib/template/js/app.js')}}"></script>
@if(Session::has('sm'))
<script>
  @if (Session:: has('toastrpos'));
  toastr.options.positionClass = "{{Session::get('toastrpos')}}";
  @else
  toastr.options.positionClass = "toast-bottom-center";
  @endif
  toastr.success("{{Session::get('sm')}}");
</script>
@endif