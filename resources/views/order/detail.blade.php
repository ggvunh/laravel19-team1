@extends('layouts.admin.master')
	@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="box-body">
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
                    <th>Unit price </th>
                    <th>Total money </th>
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
												<td class="tdclass">{{number_format( $orderDetail->product->unit_price , 0, ',', '.')}} VNĐ </td>
												<td class="tdclass" >{{number_format(  $orderDetail->unit_price, 0, ',', '.')}} VNĐ</td>
												<td><a href="{{ url('products/product/'.$orderDetail->product->id) }}">Detail</a></td>
											</tr>
                  	@endforeach
                  </tbody>

                </table>
                <h4>Total money: {{number_format( $total_price , 0, ',', '.')}} VNĐ</h4>
              </div>
              </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@stop