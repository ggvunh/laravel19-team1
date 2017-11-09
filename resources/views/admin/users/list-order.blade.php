@extends('layouts.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
       <div id="ajax_loader" class="ajax-load-qa"><h2 class="loading">Loading...</h2></div>
       <section class="content-header">
            <h1>
              Order
              <small>List of Orders</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}" class="click"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('admin/order/listorders')}}">Order</a></li>
                <li><a href="#">List of Orders</a></li>
            </ol>
       </section>
       <section class="content">
          <div class="row">
        <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                 <div class="box box-primary">
                      <div class="box-header with-border">
                         <nav class="navbar">
                              <div class="container-fluid">
                                    <div class="navbar-header">
                                      <a class="navbar-brand" class="mytile"><p class="myp">LIST OF ORDERS</p></a>
                                    </div>
                              </div>
                         </nav>
                      </div>
                      <div class="box">
                          <div class="box-body">
                                <table class="table table-bordered" id="mytable" border="0">
                                    <tr class="mytr" >
                                        <th class="myth">Order code</th>
                                        <th class="myth">Total price</th>
                                        <th class="myth">Address</th>
                                        <th class="myth">Phone</th>
                                        <th class="myth">Delivery day</th>
                                        <th class="myth">Status</th>
                                    </tr>
                                    @foreach($orderlists as $orderlist)
                                    <tr>
                                        <td class="myth">{{$orderlist->id}}</td>
                                        <td class="myth">{{$orderlist->total_price}}</td>
                                        <td class="myth">{{$orderlist->order_address}}</td>
                                        <td class="myth">{{$orderlist->order_phone}}</td>
                                        <td class="myth">{{$orderlist->order_date}}</td>
                                        <td class="myth">
                                        	@if(($orderlist->status) == 0)
                                                 Undelivered
                                            @else
                                                 Delivery
                                        	@endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                          </div>
                      </div>

                 </div>
            </div>
         </div>
       </section>
@stop
