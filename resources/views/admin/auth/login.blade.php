<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/png" href="{{ asset('eximage/fav.png') }}">
    <link rel="stylesheet" href="{{ asset('excss/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('excss/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/exstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/color.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/responsive.css') }}">
    <title>Admin Login</title>
</head>
<body>
    
    <div class="panel-layout">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="admin-lock vh100">
            <div class="admin-form">
              <h4>Log In Account</h4>
              <span>Please enter your user information</span>
              <form method="post" action="{{ route('admin.login') }}">
                @csrf

                <label for="email"><i class="fa fa-envelope"></i></label>
                <input type="email"  placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autofocus>
            @error('email')
            <br>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                <label><i class="fa fa-unlock-alt"></i></label>
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                @error('password')
                <br>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label  for="remember">{{ __('Remember Me') }}<a href="login.html#" title="">Forgot password?</a></label>
                
                        <button type="submit" >
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    
              </form>
              <span>Don't have an account? <a href="{{ route('admin.register') }}" title="">Sign up</a></span> </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="{{ asset('exjs/jquery.js') }}js/jquery.js"></script> 
    <script src="{{ asset('exjs/bootstrap.min.js') }}js/bootstrap.min.js"></script>
    <script src="{{ asset('exjs/custom.js') }}js/custom.js"></script>
</body>
</html>
<?php
/*
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
<div class="panel-layout">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="admin-lock vh100">
        <div class="admin-form">
            <div class="logo"><img src="eximage/logo2.png" alt=""></div>
          <h4>Sign In Account</h4>
          <span>Please enter your user information</span>
          <form method="post">
            <label><i class="fa fa-envelope"></i></label>
            <input type="text" placeholder="Email Address">
            <label><i class="fa fa-unlock-alt"></i></label>
            <input type="text" placeholder="Password">
            <input type="checkbox" id="remember">
            <label for="remember">Remember Me <a href="login.html#" title="">Forgot password?</a></label>
            <button type="submit">sign in</button>
          </form>
          <span>Don't have an account? <a href="login.html#" title="">Sign up</a></span> </div>
      </div>
    </div>
  </div>
</div>
</div>
 */?>