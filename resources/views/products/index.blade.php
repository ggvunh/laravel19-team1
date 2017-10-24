	@extends('layouts.admin.master')
	@section('navigation')
	   <!-- /.search form -->
	      <!-- sidebar menu: : style can be found in sidebar.less -->
	      <ul class="sidebar-menu" data-widget="tree">
	        <li class="header">MAIN NAVIGATION</li>
	         <li class="active" >
	          <a href="{{url('/products')}}">
	            <i class="fa fa-dashboard"></i> <span>Products</span>

	          </a>
	        </li>
	        
	        <li >
	          <a href="{{url('/search-order')}}">
	            <i class="glyphicon glyphicon-search"> </i> <span>Search Order</span>
	          </a>
	        </li>
	        <li >
	          <a href="{{url('/order-report')}}">
	            <i class="glyphicon glyphicon-copy"> </i> <span>Order Report</span>
	          </a>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-pie-chart"></i>
	            <span>Charts</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
	            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
	            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
	            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-laptop"></i>
	            <span>UI Elements</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
	            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
	            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
	            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
	            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
	            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-edit"></i> <span>Forms</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
	            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
	            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-table"></i> <span>Tables</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
	            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
	          </ul>
	        </li>
	        <li>
	          <a href="pages/calendar.html">
	            <i class="fa fa-calendar"></i> <span>Calendar</span>
	            <span class="pull-right-container">
	              <small class="label pull-right bg-red">3</small>
	              <small class="label pull-right bg-blue">17</small>
	            </span>
	          </a>
	        </li>
	        <li>
	          <a href="pages/mailbox/mailbox.html">
	            <i class="fa fa-envelope"></i> <span>Mailbox</span>
	            <span class="pull-right-container">
	              <small class="label pull-right bg-yellow">12</small>
	              <small class="label pull-right bg-green">16</small>
	              <small class="label pull-right bg-red">5</small>
	            </span>
	          </a>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-folder"></i> <span>Examples</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
	            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
	            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
	            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
	            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
	            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
	            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
	            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
	            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-share"></i> <span>Multilevel</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
	            <li class="treeview">
	              <a href="#"><i class="fa fa-circle-o"></i> Level One
	                <span class="pull-right-container">
	                  <i class="fa fa-angle-left pull-right"></i>
	                </span>
	              </a>
	              <ul class="treeview-menu">
	                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
	                <li class="treeview">
	                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
	                    <span class="pull-right-container">
	                      <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                  </a>
	                  <ul class="treeview-menu">
	                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
	                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
	                  </ul>
	                </li>
	              </ul>
	            </li>
	            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
	          </ul>
	        </li>
	        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
	        <li class="header">LABELS</li>
	        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
	        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
	        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
	      </ul>
	@stop
	@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="row">
							<div class="col-xs-4">
								<a href="{{url('products/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Product</a>
							</div>
							<div class="col-xs-8 text-right form-inline">
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