<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iSagar - Login</title>

 

  <link rel="icon" type="image/x-icon" href="">

  <script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/css/intlTelInput.css" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.2/build/js/intlTelInput.js"></script>

<style>
/* CSS for screens between 250px and 400px */
@media only screen and (min-width: 250px) and (max-width: 380px) {
  .phone {
    width: 243px!important;
  }
}
</style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="../../index2.html"><b>SELAI</b> DIDIMONI</a> -->
    <img src="" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <!-- <p class="login-box-msg">LOG IN</p> -->

      <form action="{{route('admin.login')}}" class="mt-5" method="post">
    @csrf


        <div class="input-group mb-3">
          <input id="email" type="email" name="email" class="form-control" placeholder="email" autocomplete="off" style="width: 280px;">
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
            <input id="password" type="password" name="password" class="form-control" placeholder="password" autocomplete="off" style="width: 280px;">
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
      
       
          <!-- /.col -->
          <center>   <div class="col-4">
           <button type="submit" class="btn btn-primary btn-block">Log In</button> 
          </div></center>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>




@if(Session::has('success'))
    <script>
        toastr.success("{{ session("success") }}");
    </script>
    @endif

    @if(Session::has('error'))
    <script>
        toastr.error("{{ session("error") }}");
    </script>
    @endif

  


</body>
</html>