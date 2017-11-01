@extends('layouts.admin.master')
	@section('content')
	 <section class="content">
      <div class="row">    
        <a class="btn btn-success col-xs-3 col-xs-offset-2"  href="{{url("excel/users")}}">Export Users to Excel</a>
       <a href="{{url("excel/orders")}}" class="btn btn-success col-xs-3 	col-xs-offset-1">Export Orders to Excel</a>
  </div>
      <!-- /.row -->
    </section>
    @stop