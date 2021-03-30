<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Web Admin panel</title>
    <link rel="icon" type="image/png" href="{{ asset('eximage/fav.png') }}">
    <link rel="stylesheet" href="{{ asset('excss/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('excss/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/exstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/color.css') }}">
    <link rel="stylesheet" href="{{ asset('excss/responsive.css') }}">
</head>
<body>
    <div class="panel-layout">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="admin-lock vh100"> 
                <div class="admin-form">
                  <div class="logo"><img src="images/logo2.png" alt=""></div>
                  <h4>Sign Up Account</h4>
                  <span>Please enter your user information</span>
                  <form method="post" action="{{ route('admin.register') }}">
                    @csrf
                    <label><i class="fa fa-user-circle-o"></i></label>
                    <input type="text" placeholder="Complete Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <label><i class="fa fa-envelope"></i></label>
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <label><i class="fa fa-unlock-alt"></i></label>
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    <label><i class="fa fa-unlock-alt"></i></label>
                    <input placeholder="Confirm-Pasword"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <br>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                  </form>
                  <span>Already a member? <a href="{{ route('admin.login') }}" title="">Sign in</a></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
