@extends('layouts.admin.master')
@section('content')
     <div class="content-wrapper nxp-admin"> 
    <!-- Content Header (Page header) -->
       <div id="ajax_loader" class="ajax-load-qa"><h2 class="loading">Loading...</h2></div>
       <section class="content-header">
            <h1>
              Order
              <small>List of Orders</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}" class="click"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('admin/order/orders')}}">Order</a></li>
                <li><a href="#">List of Orders<a></li>
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
                                    <a><form class="navbar-form navbar-left form1" action="{{url('admin/order/search')}}" method="get"> 
                                      <div class="form-group">
                                           <select name="status" class="form-control" style=" width:80px"">
                                              <option value="0">Both</option>
                                              <option value="1">Undilevery</option>
                                              <option value="2">Dilevery</option>
                                           </select>
                                           <input type="text" class="form-control " style="width: 500px" name="search" placeholder="Search by Date/by Month/by Product Name/by Customer Email" @if(isset($search_input))
                                                       value="{{$search_input}}"
                                                   @endif>
                                      </div>
                                      <button type="submit" class="btn btn-info click"  id="search" style="margin-left: 30px">Search</button>              
                                    </form></a>
                              </div>
                         </nav>
                      </div>
                      <div class="box">
                          <div class="box-body">
                              <div>
                                 <span style="color: red;font-size:20px">Have </span><span style="color: black;font-size: 25px" >
                                      @if(isset($count_search))
                                        {{$count_search}}
                                      @else
                                          0
                                      @endif
                                    </span><span style="color: red;font-size:20px">Orders in table</span>
                                    <span style="font-size: 20px">&nbsp&nbsp/&nbsp&nbsp</span><span style="color: blue;font-size:20px">Total money:</span>
                                    <span style="color: black;font-size: 25px" >
                                       @if(isset($count_money))
                                        {{number_format($count_money)}}<span>&nbsp&nbsp&nbsp</span><span style="color: red">VNĐ</span>
                                      @else
                                          0<span>&nbsp&nbsp&nbsp</span><span style="color: red">VNĐ</span>
                                      @endif
                                    </span>
                              </div>
                                <table class="table table-bordered" id="mytable" border="0">
                                    <tr class="mytr" >
                                        <th class="myth">Order code</th>
                                        <th class="myth">Total money</th>
                                        <th class="myth">Customer Email</th>
                                        <th class="myth">Address</th>
                                        <th class="myth">Note</th>
                                        <th class="myth">Delivery day</th>
                                        <th class="myth">Status</th>
                                        <th class="myth">Detail</th>
                                        <th class="myth">Check</th>
                                    </tr>
                                    @if(isset($result_searchs))
                                    @foreach($result_searchs as $bill)
                                    <tr>
                                        <td class="myth">{{$bill->id}}</td>
                                        <td class="myth">{{number_format($bill->total)}}</td>
                                        <td class="myth">{{$bill->user->email}}</td>
                                        <td class="myth">{{$bill->order_address}}</td>
                                        <td class="myth">{{$bill->note}}</td>
                                        <td class="myth">{{date('d-m-Y',strtotime($bill->date_order))}}</td>
                                        <td class="bamtd">
                                        	@if(($bill->status) == 0)
                                                 Undelivered
                                            @else
                                                 Delivery
                                        	@endif
                                        </td>
                                        <td class="myth"><span class="glyphicon glyphicon-list-alt"></span><a href="{{url('admin/order/detailorder')}}/{{$bill->id}}" style="color:red" class="click">Detail</a></td>
                                        <td class="myth"><a href="{{url('admin/order/check')}}/{{$bill->id}}"><button class="btn btn-info">Check</button></a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </table>
                          </div>
                        @if(isset($result_searchs))
                        {{$result_searchs->links()}}
                        @endif
                      </div>
                 </div>
            </div>
         </div>
       </section>
    </div>
@stop
