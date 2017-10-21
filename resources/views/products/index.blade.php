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
								<form action="{{url('products/search') }}" method="get">
								<div class="form-group">
									<select name="filter" class="form-control search-option">
										<option>Product Name</option>
										<option>Manufacturer Name</option>
									</select>
								</div>
								<div class="form-group">
									<input name="name" type="text" class="form-control search-input" placeholder="Search...">
									<button type="submit" style="border:0;background:transparent;text-indent: -30px;">
									<span class="glyphicon glyphicon-search"></span>
									</button>
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
									<th>Description</th>
									<th>Price</th>
									<th>Quality</th>
									<th>Status</th>
									<th>Review</th>
									<th>Menu</th>

								</tr>
							</thead>
							<tbody>
								<?php foreach ($products as $value): ?>
									<tr>
										<td>{{ $value->name}}</td>
										<td>{{ $value->category->name}}</td>
										<td>{{ $value->manufacturer->name}}</td>
										<td>{{ $value->description}}</td>
										<td>{{ $value->unit_price}}</td>
										<td>{{ $value->quality_in_store}}</td>
										<td>{{ $value->status}}</td>
										<td>{{ $value->review}}</td>
										<td>
											<a href="{{ url('products/' . $value->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit
											</a>
				   							<a id="delete_data"  href="{{ url('products/' . $value->id . '/delete') }}" >
				   								<i class="fa fa-trash"></i> Delete
				   							</a>
										</td>
									</tr>
								<?php endforeach ?>
								<tr>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<div class="row">
							<div class="col-md-4 form-inline">
								<div class="form-group">
									<select class="form-control option"></select>
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
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>FREE SHIPPING</h4>
						<p>Shipping after 30 minutes with Da Nang's customer, 2-5 days with customer in others. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>24/24 online advisory staff.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Brand new products. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	@yield('footer_top')
	</div>
	<!-- //footer-top -->
	@stop
