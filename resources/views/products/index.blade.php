	@extends('layouts.admin.master')
	@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="row">
							<div class="col-xs-6">
								<a href="{{url('products/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Product</a>
							</div>
							<div class="col-xs-6 text-right form-inline">
								<form action="{{url('search-product')}}" method="get">
								<div class="form-group">
									<select name="filter" class="form-control search-option">
										<option>Product Name</option>
										<option>Manufacturer Name</option>
									</select>
								</div>
								<div class="form-group">
									<span>
									<input name="name" value="{{ old('username') }}" type="text" class="form-control search-input" placeholder="Search...">
									<button type="submit" style="border:0;background:transparent;text-indent: -30px;">
									<span class="glyphicon glyphicon-search"></span>
									</button>
									</span>
								</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive">
						<table class="table table-bordered table-hover" id="datagrid">
							<thead >
								<tr >
									<th>Name</th>
									<th>Category Name</th>
									<th>Manufacturer Name</th>
									<th>Menu</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product)
									<tr>
										<td><a href="{{ url('products/product/'.$product->id) }}">{{ $product->name}}</a></td>
										<td>{{ $product->category->name}}</td>
										<td>{{ $product->manufacturer->name}}</td>
										<td>
											<a href="{{ url('products/' . $product->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit 
											</a> 
				   							<a id="delete_data"  href="{{ url('products/' . $product->id . '/delete') }}" >
				   								<i class="fa fa-trash"></i> Delete
				   							</a>
										</td>
									</tr>
								@endforeach	
							</tbody>
						</table>
					</div>
					<div class="page">
					<ul class="pagination">
						<li><a href="{{ url('products?page='.$previous_page.'&limit='.$limit) }}">&laquo;</a></li>
						<li><a href="{{ url('products?page=1&limit='.$limit) }}">1</a></li>
						<li><a href="{{ url('products?page=2&limit='.$limit) }}">2</a></li>
						<li><a href="{{ url('products?page=3&limit='.$limit) }}">3</a></li>
						<li><a href="{{ url('products?page=4&limit='.$limit) }}">4</a></li>
						<li><a href="{{ url('products?page=5&limit='.$limit) }}">5</a></li>
						<li><a href="{{ url('products?page='.$next_page.'&limit='.$limit) }}">&raquo;</a></li>
					</ul>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<div class="row">
							<div class="col-md-4 form-inline">
								<div class="form-group">
									<select class="form-control option" id="select-page" onchange="myFunction()">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 text-center info"></div>
							<div class="col-md-4">
								<ul class="pagination pagination-sm no-margin pull-right pagination-main"></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</section>
	
	<script type="text/javascript">
		
		function myFunction() {
			var x = document.getElementById("select-page").value;
			window.location='products?limit='+x;
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			
	    $('.page .pagination').find('li').click(function() {
	    	//alert("ok");
				//e.preventDefault();
				$(this).attr("class","active");
				// var concept = $(this).text();
				// //alert(concept);
				// $(this).attr("href","{{ url('products?page=1&limit='.$limit) }}");
				// console.log(this);
				// var concept = $(this).text();
				// if(param=="orderdate")
				// {
				// 	$("#x").attr("id", "datepicker");
				// }
				// else
				// {
				// $("#datepicker").attr("id", "x");
				// }	
				// $('.search-panel span#search_concept').text(concept);
				// $('.input-group #search_param').val(param);
				
			});
		});
	</script>
	@stop