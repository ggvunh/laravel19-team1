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
	        <li >
          <a href="{{url('/calendar')}}">
             <i class="fa fa-calendar"></i> <span>Calendar</span>

          </a>
        </li>
        <li>
          <a href="{{url('/export')}}">
             <i class="glyphicon glyphicon-download-alt"></i> <span>Export</span>
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
								<div class="form-group">
									<select name="filter" id="filter" class="form-control search-option">
										<option>Product Name</option>
										<option>Manufacturer Name</option>
									</select>
								</div>
								<div class="form-group">
									<span>
									<input id="search-product" name="name" value="{{ old('username') }}" type="text" class="form-control search-input" placeholder="Search...">
								</div>
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
								
							</tbody>
						</table>
					</div>
					<div class="page">
					<ul id="pagination" class="pagination">

					</ul>	
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<div class="row">
							<div class="col-xs-2 col-md-4 form-inline">
								<div class="form-group">
									<select class="form-control option" id="select-page" >
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option selected>6</option>
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
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
					<a href="#exampleModal" class="btn btn-default btn-small" id="custId" data-toggle="modal">Edit</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="update_action()"  class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
	$(document).ready(function(){

   


		$("#select-page").change(function() {
 			var limit = document.getElementById("select-page").value;
 			var name=$("#search-product").val();
			var filter=$("#filter").val();
 			$.ajax({
				url:"api",
				type:"post",
				data:{limit:limit,name:name,filter:filter,_token:"{{ csrf_token() }}"},
				success: function(data,status){
					getData(data, status),
					totalPage(data),
					disabled(data)	
				}
			})
		})

		$("#search-product").keyup(function(){
			var name=$(this).val();
			var filter=$("#filter").val();
			var limit = document.getElementById("select-page").value;
			$.ajax({
				url:"api",
				type:"post",
				data:{name:name,filter:filter,limit:limit,_token:"{{ csrf_token() }}"},
				success: function(data,status){
					getData(data, status),
					totalPage(data,status),
					disabled(data)
					console.log(data);
				}			
			})

		})	

		$.ajax({
			url:"api",
			type:"post",
			data:{_token:"{{ csrf_token() }}"},
			success: function(data,status){
				getData(data, status),
				totalPage(data),
				disabled(data)
			}
		})

		function getData(data, status){
			$("tbody").empty();
			$.each(data.products,function(key, product){
					$("tbody").append (
						"<tr>" +
						"<td>" + "<a " + "href="+"products/product/"+product.id+" >"+product.name+
						" </a>"+"</td>"+
						"<td>"+product.category.name+"</td>" +	
						"<td>"+product.manufacturer.name+"</td>"+
						"<td>"+
							'<a href="#" id="edit" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-pencil"></i> Edit&nbsp;&nbsp;</a>'+
								'<a href="#" onclick="delete_data('+product.id+')"><i class="fa fa-trash"></i> Delete</a>'+
						"</td>"+
						"</tr>"
					)
					 $("#exampleModal").on('show.bs.modal', function () {
            alert('The modal is about to be shown.');
    });
			})


       
		} 

		function disabled(data)
		{
			if(data.first==true){
				$('.page .pagination li:contains("«")').attr("class","disabled");
			}
			
			if(data.last==true){
				$('.page .pagination li:contains("»")').attr("class","disabled");
			}
		}

		function totalPage(data, status)
		{
			// "<li>"+ "<a " +"href="+"products?page="+data.previous_page+"&limit="+data.limit+" >"+"&laquo;"+"</a>"+"</li>"+
			$('.page .pagination').empty();
			$('.page .pagination').append(
				'<li> <a href="#" >&laquo;</a> </li>'
			)	
			for (data.start_page; data.start_page<=data.end_page;data.start_page++) {
			$('.page .pagination').append(
				'<li> <a href="#" >'+data.start_page+'</a </li>'
			)
			}
			$('.page .pagination').append(
				'<li> <a href="#" >&raquo;</a> </li>'
			)
		
			$("#pagination li:first-child").next().attr("class","active");
			if(data.current_page=="»"){
				$('.page .pagination').find('li').removeClass("active");
				$("#pagination li:first-child").next().attr("class","active");
			}
			else if(data.current_page=="«"){
				$('.page .pagination').find('li').removeClass("active");
				$("#pagination li:last-child").prev().attr("class","active");
			}

			$('.page .pagination').find('li').click(function() {

				$('.page .pagination').find('li').removeClass("active");
				
				var limit = document.getElementById("select-page").value;
				var current_page=$(this).find('a').text();
				var previous_page=$(this).next().find('a').text();
				var next_page=$(this).prev().find('a').text();
				var name=$("#search-product").val();
				var filter=$("#filter").val();
				$(this).attr("class","active");
				$.ajax({
					url:"api",
					type:"post",
					data: {
								limit:limit,
								previous_page:previous_page,
								next_page:next_page,
						  	current_page:current_page,
						  	name:name,
						  	filter:filter,
						   	_token:"{{ csrf_token() }}"
								},
					success: function(data,status){
						if(data.current_page=="»")
						{
							totalPage(data,status),
							getData(data, status),
							disabled(data)	
						}
						else if(data.current_page=="«")
						{
							totalPage(data,status),
							getData(data, status),
							disabled(data)
						}
						else {
							getData(data, status),
							disabled(data)
						}
					}
				})
			});
		}
		
	});
	function delete_data(productId){
		swal({
	  title: "Are you sure want to delete this data?",   
		text: "Deleted data can not be restored!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		  	$.get("/products/"+productId+"/delete");
		    swal("Data successfully deleted", {
		      icon: "success",
		    });
		  }
		});
	}

	function save_action() {
		alert("ok");
		var formData = $('#form-action').serialize();
		$("button[title='save']").html("Saving data, please wait...");
		// $.post("http://native-theme.com/datagrid_server/public/album/action", formData).done(function(data) {
		// 	$("button[title='save']").html("Save");
		// 	$('#form-modal').modal("hide");
		// 	swal({   
		// 		title: "Success",
		// 		text: "Data successfully saved",
		// 		type: "success"
		// 	});
		// 	datagrid.reload();
	 //      });
	}

	function update_action() {
		
		$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
	}	
	</script>
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
