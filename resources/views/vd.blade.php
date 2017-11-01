<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>pdf</title>
    </head>
    <body>
           <div class="table-responsive">
          	<div>
          		<h2>Order ID : {{ $order->id }}</h2>
          		<h2>Customer Name :{{ $order->user->name }}</h2>
          	</div>
          	<div class="box-body table-responsive">
            <table class="table table-bordered table-hover" id="datagrid">
              <thead>
              <tr>
                <th>Product Name</th>
                <th>Quality</th>
                <th>Unit price (VND)</th>
                <th>Total money (VND)</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @php
                  $s=0;
                @endphp
              	@foreach ($order->orderDetails as $orderDetail)
              		<tr>
										<td>{{ $orderDetail->product->name}}</td>
										<td>{{ $orderDetail->quality}}</td>
										<td>{{ $orderDetail->product->unit_price }} </td>
										<td>{{ $orderDetail->unit_price}}</td>
									</tr>
              	@endforeach
              	<tr>
              		<th colspan="3">Total</th>
              		<td>{{$total_price}}</td>
              	</tr>
              </tbody>

                </table>
               {{--  <h4>Total money: {{ $total_price }} VNĐ</h4> --}}
              </div>
              </div>
    </body>
</html>