<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>pdf</title>
        <style>
          @font-face {
            font-family: "Dojo Sans Serif";
            font-style: normal;
            font-weight: normal;
            src: url(http://example.com/fonts/dojosans.ttf) format('truetype');
          }
          * {
            font-family: "Dojo Sans Serif", "DejaVu Sans", sans-serif;
          }
          table,td,th{
            border: 1px solid black;
          }

        </style>
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
										<td>{{number_format( $orderDetail->quality, 0, ',', '.')}} </td>
										<td>{{number_format( $orderDetail->product->unit_price, 0, ',', '.')}} VNĐ </td>
										<td>{{number_format( $orderDetail->unit_price, 0, ',', '.')}} VNĐ</td>
									</tr>
              	@endforeach
              	<tr>
              		<th colspan="3">Total</th>
              		<th>{{number_format( $total_price , 0, ',', '.')}} VNĐ</th>
              	</tr>
              </tbody>

                </table>
               <h4>Total money: {{number_format( $total_price , 0, ',', '.')}} VNĐ</h4>
              </div>
              </div>
    </body>
</html>
