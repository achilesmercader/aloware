@extends('layouts.auth')

@section('content')
      <p class="login-box-msg">Reset Password</p>

      <form action="{{ route('password.request') }}" method="post">
	  {{ csrf_field() }}
		<input type="hidden" name="token" value="{{ $token }}">
		
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ $email or old('email') }}" required autofocus>

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
          <input id="password-confirm" type="password" class="form-control" placeholder="Email" name="password_confirmation" required>

          <div class="input-group-append">
			@if ($errors->has('password_confirmation'))
				<div class="input-group-text">
				  <span class="fas fa-lock">{{ $errors->first('password_confirmation') }}</span>
				</div>
			@endif
          </div>
        </div>
		
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Create a new account</a>
      </p>
	  
	  
@endsection
