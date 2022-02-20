@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/log/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/log/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/log/style.css">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/free/gro.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>G-Mart</strong></h3>
            <p class="mb-4">Get all your grocery needs Now!</p>
            <form action="{{ route('login')}}" method="post">
                @csrf
              <div class="form-group first">
                <label for="email" >{{_('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="your-email@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror

              </div>
              <div class="form-group last mb-3">
                <label for="password">{{_('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your Password" id="password"required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror

              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">  {{ _('Remember Me') }}</span>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <div class="control__indicator"></div>
                </label>
                @if (Route::has('password.request'))
                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">{{ _('Forgot Your Password?') }}</a></span> 
                @endif
              </div>

              <button type="submit" class="btn btn-primary">
                                    {{ _('Login') }}
                                </button>

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

   
  </body>
</html>
@endsection
