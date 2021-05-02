@extends('layouts.blog')

@section('title', 'Login - CSC227 Blog')

@section('content')
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {
    font-size: 15px;
    font-weight: bold;
}
</style>
<!-- simple login form from https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=simple-login-form -->
<div class="login-form">
	<form action="/login" method="post">
		@csrf
		<h2 class="text-center">Log in</h2>
		<div class="form-group">
			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>

			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="form-group">
			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
		<div class="clearfix">
			<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
			<a href="#" class="float-right">Forgot Password?</a>
		</div>
	</form>
	<p class="text-center"><a href="/register">Create an Account</a></p>
</div>
@endsection
