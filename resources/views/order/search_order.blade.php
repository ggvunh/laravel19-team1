@extends('layouts.admin.master')
	@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="row">	
            <div class="box-header with-border">
              <h2>Search Order</h2>
              <div class="col-xs-8 col-xs-offset-2">
		    				<div class="input-group">
                <div class="input-group-btn search-panel">
                	<form action="{{ url('orders/search')}}" method="get">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#orderid">Order ID</a></li>
                      <li><a href="#customer">Customer Name</a></li>
                      <li><a href="#shipping">Shipping Information</a></li>
                      <li><a href="#orderdate">Order date</a></li>
                    </ul>
		                </div>
		                <input type="hidden" name="search_param" value="all" id="search_param">         
		                <input type="text" class="form-control" id="x" name="x"  placeholder="Search term...">
		                <span class="input-group-btn">
		                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
		                </span>
              	</form>
            	</div>
        			</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Order date</th>
                    <th>Status</th>
                    <th>Total money</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach ($orders as $order)
											<tr>
												<td>{{ $order->id}}</td>
												<td>{{ $order->user->name}}</td>
												<td>{{ $order->order_address}}</td>
												<td>{{ $order->order_phone}}</td>
												<td>{{ $order->created_at}}</td>
												<td>{{ $order->status}}</td>
												<td>{{ $order->total_price }}</td>
												<td><a href="{{ url('detail-order/'.$order->id) }}" >Detail</a></td>
											</tr>
                  	@endforeach	
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            
						</div>
					</div>
				</div>
			</div>
		</div>				
	</section>
  <script type="text/javascript">
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $('.search-panel .dropdown-menu').find('a').click(function() {
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				if(param=="orderdate")
				{
					$("#x").attr("type", "date");
				}
				else
				{
				$("#x").attr("type", "text");
				}	
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
				
			});
		});
	</script>
	

   
	@stop