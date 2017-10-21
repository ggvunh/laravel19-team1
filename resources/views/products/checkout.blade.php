@extends('layouts.users.layout')
@section('content')
	<div class="container">
		<h2 style="margin:15px;">Checkout</h2>
		<table class="table" >
		    <thead>
			    <tr>
			        <th>Name</th>
			        <th>Quantity</th>
			        <th>Price</th>
			        <th>Action</th>
			    </tr>
		    </thead>
		    <tbody>
		    @foreach (\Cart::content() as $row)
			    <tr>
			        <td>{{$row->name}}</td>
			        <td class="cart_quantity">
						<div class="cart_quantity_button">
							<?php $rowId = (string)$row->rowId ?>
								<form>
  									<input type="button" value="-" onclick="down('{{$row->rowId}}')" class="btn btn-default">
  									<input type="text" id="{{$row->rowId}}" name="quantity" value="{{$row->qty}}" size="2" style="text-align: center;" class="input-lg">
  									<input type="button" value="+" onclick="up('{{$row->rowId}}')" class="btn btn-default">
								</form>
					</td>
			        <td class="cart_total">
						<p class="cart_total_price"><span id="sub{{$row->rowId}}">{{ number_format($row->subtotal) .'$' }}</span></p>
					</td>
			        <td><a href="/carts/{{$row->rowId}}/delete" class="btn btn-danger">&#10006; Delete</a></td>
			    </tr>
		    @endforeach
		    </tbody>
		    <tfoot>
		        <tr>
		            <td></td>
		            <td><h3><b>Total</b></h3></td>
		            <td><p  class="cart_total_price"><span id="total">{{ Cart::total() .'$' }}</span></p> <a class="" href=""><i class="fa fa-refresh fa-2" aria-hidden="true"></i></a></td>
		            <td></td>
		        </tr>
		    </tfoot>
  		</table>
  		<a href="{{url('/checkout/info')}}" class="btn btn-primary" style="margin:15px;">Start Order</a> 
	</div>
	<script>
		function down(rowId)
		{
			var root = '{{ url('/carts') }}';
			$.get( root + '/' + rowId + '/down-count', function(data, status){
			 	var sub = data.subtotal.toLocaleString();
			 	console.log(data);
			 	$('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;" class="input-lg">');
			 	$('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+'$ </span>');
			});

		}

		function up(rowId)
		{
			var root = '{{ url('/carts') }}';
		 	$.get( root + '/' + rowId + '/up-count', function(data, status){
		 		var sub = data.subtotal.toLocaleString();
		 		console.log(data);
		 		$('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;" class="input-lg"> ');
		 		$('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+'$</span>');
		 	});
		}
	</script>
@endsection
