@extends('layouts.guest')


@section('content')
<div class="login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
            @if (session('status'))
                <div class="bg-danger text-center text-white mb-3">
                    {{ session('status') }}
                </div>
            @endif
      <form action="{{ route('register') }}" method="post">
          @csrf
        <div class="input-group mb-3">
          <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}" placeholder="Company">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            @error('company')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>

        <div class="input-group mb-3">
          <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Firstname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('firstname')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('lastname')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('address')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="tel" name="reg_number" class="form-control @error('reg_number') is-invalid @enderror" placeholder="Registered Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('reg_number')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('phone_number')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <!-- <div class="input-group mb-3">
          <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('phone_number')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div> -->
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('username')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('email')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="******">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="******">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password_confirmation')
                <span class="error invalid-feedback"> {{ $message }}</span>
            @enderror
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">REGISTER NOW</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Login now</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
@endsection