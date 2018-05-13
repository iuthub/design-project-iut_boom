@extends('layouts.loginLayout')
@section('content')
	<div class=container >
	<div class="row" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		 <form method="POST" action="{{ route('login') }}">
			   @csrf
			<fieldset>
				<h2>{{ __('Please Sign in')}}</h2>
				<a href="#" class="fb btn">
         		 <i class="fa fa-facebook "></i> Login with Facebook
        		</a>
        		<a href="#" class="google btn">
         		 <i class="fa fa-google "></i> Login with Gmail
        		</a>
				<hr class="colorgraph">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                   <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
				<span class="button-checkbox">
					
                   <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
					<a href="{{ route('password.request') }}" class="btn btn-link pull-right"> {{ __('Forgot Your Password?') }}</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="register" class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/4.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

@endsection
