@extends('layouts.users.layout')


@section('content')
	<!-- login-page -->
	<div class="login-page">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Login</h3>
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="submit" value="Login">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forget password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
			<h6> Not a Member? <a href="signup.html">Sign Up Now »</a> </h6>
			<div class="login-page-bottom social-icons">
				<h5>Social Network</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //login-page -->
@endsection
