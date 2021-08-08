@extends('layouts.auth')

@section('content')

	  <p class="login-box-msg">Create a new account</p>

      <form action="{{ route('register') }}" method="post">
	  {{ csrf_field() }}
        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>

          <div class="input-group-append">
			@if ($errors->has('name'))
				<div class="input-group-text">
				  <span class="fas fa-user">{{ $errors->first('name') }}</span>
				</div>
			@endif
								
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
          <div class="input-group-append">
		  
			@if ($errors->has('email'))
				<div class="input-group-text">
				  <span class="fas fa-envelope">{{ $errors->first('email') }}</span>
				</div>
			@endif
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

          <div class="input-group-append">
			@if ($errors->has('password'))
				<div class="input-group-text">
				  <span class="fas fa-lock">{{ $errors->first('password') }}</span>
				</div>
			@endif
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('login') }}" class="text-center">Sign in to start your session</a>
      </p>

@endsection
