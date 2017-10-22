@extends('layouts.users.layout')
@section('content')
	<div class="login-page">
		<div class="container"> 
			<h3 style="margin-bottom:20px;">Order Information</h3>  
			<div class="login-body">
				<form action="{{url('/order/confirm')}}" method="get">
					<label for="name" class="pull-left" style="margin: 5px;">Receiver Name</label> <br>
					<input type="text" class="user" name="name" value="{{$user->name}}" required="">
					<label for="name" class="pull-left" style="margin: 5px;">Confirmative Email</label> <br>
					<input type="text" class="user" name="email" value="{{$user->email}}" required="">
					<label for="name" class="pull-left" style="margin: 5px;">Receiver's Address</label>
					<input type="text" class="user" name="order_address" value="{{$user->address}}" required="">
					<label for="name" class="pull-left" style="margin: 5px;">Receiver's Phone Number</label>
					<input type="text" class="user" name="order_phone" value="{{$user->phone}}" required="">
					<input type="submit" value="Confirm">
					<a href="{{url('/checkout')}}" class="pull-left" style="margin: 5px;">&larr; Return</a>
				</form> 
			</div>  
		</div>
	</div>
@endsection