@extends('layouts.admin.master')
@section('navigation')
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
           <li >
            <a href="{{url('/products')}}">
              <i class="fa fa-dashboard"></i> <span>Products</span>

            </a>
          </li>
          
          <li >
            <a href="{{url('/search-order')}}">
              <i class="glyphicon glyphicon-search"> </i> <span>Search Order</span>
            </a>
          </li>
          <li class="active">
            <a href="{{url('/order-report')}}">
              <i class="glyphicon glyphicon-copy"> </i> <span>Order Report</span>
            </a>
          </li>
          <li >
          <a href="{{url('/calendar')}}">
             <i class="fa fa-calendar"></i> <span>Calendar</span>

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
            <div class="form-group">
              <div class="form-group">
                <div class="row">

                  <div class="input-daterange">
                    <div class="col-xs-3 col-xs-offset-1">
                      <input type="text" name="start_date" id="start_date" class="form-control" readonly />
                    </div>
                    <div class="col-xs-3">
                      <input type="text" name="end_date" id="end_date" class="form-control" readonly />
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
                  </div>
              </div> 
                
              </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover" id="datagrid">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Order date</th>
                    <th>Status</th>
                    <th>Total money</th>
                    <th></th>
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
              <h4></h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script >
$(document).ready(function(){     
  $('.input-daterange').datepicker({
     todayBtn: "linked",
     format: "yyyy-mm-dd",
     autoclose: true
  });
   
  $('#search').click(function(){
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    var limit = document.getElementById("select-page").value;
    if(start_date != '' && end_date !='')
    {
      $.ajax({
        url:"orders/search",
        type:"post",
        data:{limit:limit,start_date:start_date,end_date:end_date,_token:"{{ csrf_token() }}"},
        success: function(data,status){
          console.log(data);
          getData(data, status),
          totalPage(data),
          disabled(data),
          totalPrice(data)  
        }
      })
    }
    else
    {
      alert("Both Date is Required");
    }
  });
  
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
          totalPrice(data)  
        }
      })
    })


    $.ajax({
      url:"orders/search",
      type:"post",
      data:{_token:"{{ csrf_token() }}"},
      success: function(data,status){
        getData(data, status),
        totalPage(data),
        disabled(data),
        totalPrice(data)
      }
    })

    function getData(data, status){
      $("tbody").empty();
      $.each(data.orders,function(key, order){
          $("tbody").append (
            "<tr>" +
              "<td>"+order.id+"</td>" + 
              "<td>"+order.user.name+"</td>"+
              "<td>"+order.order_address+"</td>" +  
              "<td>"+order.order_phone+"</td>"+
              "<td>"+order.order_date+"</td>" + 
              "<td>"+order.status+"</td>"+
              "<td>"+order.total_price+"</td>" +  
              '<td>'+'<a href=detail-order/'+order.id+'  >Detail</a>'+'</td>'+
              '<td>'+'<a href=order/pdf/'+order.id+'  >Detail</a>'+'</td>'+
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

    function totalPrice(data)
    {
      $("div h4").text("Total money:"+data.total_price+" VND");
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
</script>
	@stop