@extends('layouts.admin.master')
@section('content')
	<section class="content">
		<div class="box">
		<div class="box-header with-border">
		<div class="col-md-6 col-md-offset-3">
			<div>
				<h2><span class="label label-default">Add Product</span></h2>
			</div>
			<br>
			{!! Form::open(['url' => 'products', 'enctype' => 'multipart/form-data'])  !!}
			@include('partials.forms.product')
			{!! Form::close() !!}
	</div>
	</div>
	</div>
	</section>
@stop
