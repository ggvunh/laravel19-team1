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
              <div class="row">
              <div class="col-xs-8 col-xs-offset-4">
							<div class="col-xs-5 ">
                <select name="filter" id="filter" class="form-control search-option">
								<option>Order ID</option>
								<option>Customer Name</option>
								<option>Shipping Information</option>
								<option>Order date</option>
								</select>
							</div>
							<div class="col-xs-5 ">
							<input type="text" autocomplete="off" class="form-control" id="search" name="name"  placeholder="Search term..."> 
	    				</div>
	    				<div class="col-xs-2">
                <input type="button" style="display:none" id="searchbtn" value="Search" class="btn btn-info" />
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
              <div class="col-xs-3 ">
              <span id="show-entries"></span>
              </div>
            </div> 
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
					</div><!-- /.table-responsive -->
						</div>
						<h4> </h4>
					</div>
				</div>
			</div>
		</div>				
	</section>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#select-page").change(function() {
 			var limit = document.getElementById("select-page").value;
 			var name=$("#search").val();
			var filter=$("#filter").val();		
 			$.ajax({
				url:"orders/search",
				type:"post",
				data:{limit:limit,name:name,filter:filter,_token:"{{ csrf_token() }}"},
				success: function(data,status){
					getData(data, status),
					totalPage(data),
					disabled(data),
					show(data)	
				}
			})
		})

		$("#filter").change(function() {
			var filter=$(this).val();
			if(filter=="Order date")
			{
				$("#search").attr("type", "date");
				$("#search").attr("min","2017-01-01");
	  		$("#searchbtn").show();
			}
			else
			{
				$("#searchbtn").hide();
				$("#search").attr("type", "text");
				$("#search").val("");
				
			}

		})	

		$("#search").keyup(function(){
			var name=$(this).val();
			var filter=$("#filter").val();
			var limit = document.getElementById("select-page").value;
			$.ajax({
				url:"orders/search",
				type:"post",
				data:{name:name,filter:filter,limit:limit,_token:"{{ csrf_token() }}"},
				success: function(data,status){
					getData(data, status),
					totalPage(data,status),
					disabled(data),
					show(data)
				}			
			})

		})	

		$("#searchbtn").click(function(){
			var name=$("#search").val();
			var filter=$("#filter").val();
			var limit = document.getElementById("select-page").value;
			$.ajax({
				url:"orders/search",
				type:"post",
				data:{name:name,filter:filter,limit:limit,_token:"{{ csrf_token() }}"},
				success: function(data,status){
					console.log(data);
					getData(data, status),
					totalPage(data,status),
					disabled(data),
					show(data)
				}			
			})
		});

		$.ajax({
			url:"orders/search",
			type:"post",
			data:{_token:"{{ csrf_token() }}"},
			success: function(data,status){
				getData(data, status),
				totalPage(data),
				disabled(data),
				totalPrice(data),
				show(data)
			}
		})

		function getData(data, status){
			$("tbody").empty();
			$.each(data.orders,function(key, order){
				var total_price= number_format( order.total_price, 0, ',', '.');
					$("tbody").append (
						"<tr>" +
							"<td>"+order.id+"</td>" +	
							"<td>"+order.user.name+"</td>"+
							"<td>"+order.order_address+"</td>" +	
							"<td>"+order.order_phone+"</td>"+
							"<td>"+order.order_date+"</td>" +	
							"<td>"+order.status+"</td>"+
							'<td class="tdclass" >'+total_price+" VNĐ</td>" +	
							'<td>'+'<a href=detail-order/'+order.id+'  >Detail</a>'+'</td>'+
						"</tr>"
					)
					 $("#exampleModal").on('show.bs.modal', function () {
            			alert('The modal is about to be shown.');
    				});
			})
		} 

		function totalPrice(data)
	    {
	      $("div h4").text("Total money: " +number_format( data.total_price, 0, ',', '.')+" VNĐ");
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
				var name=$("#search").val();
				var filter=$("#filter").val();
				$(this).attr("class","active");
				$.ajax({
					url:"orders/search",
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
							data.current_page=data.start_page;
							totalPage(data,status),
							getData(data, status),
							disabled(data),
							show(data)	
						}
						else if(data.current_page=="«")
						{
							totalPage(data,status),
							data.current_page=data.end_page;
							getData(data, status),
							disabled(data),
							show(data)
						}
						else {
							getData(data, status),
							disabled(data),
							show(data)
						}
					}
				})
			});
		}

		function show(data){
      if(data.total_records==0){
        $('#show-entries').text("No matching records found");
      }
      else if(data.limit*data.current_page>data.total_records){
        $('#show-entries').text('Showing '+(data.limit*(data.current_page-1)+1)+' to '+data.total_records+' of '+data.total_records+' entries');
      }
      else {
        $('#show-entries').text('Showing '+(data.limit*(data.current_page-1)+1)+' to '+data.limit*data.current_page+' of '+data.total_records+' entries');
      } 
     }
		});
	function number_format( number, decimals, dec_point, thousands_sep ) 
	{   
          var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
          var d = dec_point == undefined ? "," : dec_point;
          var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
          var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                       
          return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    }
	</script>
	

   
	@stop