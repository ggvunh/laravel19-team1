@extends('layouts.admin.master')
@section('content')
     <div class="content-wrapper nxp-admin">
    <!-- Content Header (Page header) -->
       <div id="ajax_loader" class="ajax-load-qa"><h2 class="loading">Loading...</h2></div>
       <section class="content-header">
            <h1>
              Order
              <small>Detail of Orders</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin')}}" class="click"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('admin/order/orders')}}">Order</a></li>
                <li class="active"><a href="#">Detail of Orders<a></li>
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
                                      <a class="navbar-brand" class="mytile"><p class="myp">DETAIL OF ORDERS</p></a>
                                    </div>
                                    <a><form class="navbar-form navbar-left form1" action="{{url('admin/order/search')}}" method="get"> 
                                      <div class="form-group">
                                           <input type="text" class="form-control " style="width: 560px" name="search" placeholder="Search Order by Date/by Month/by Product Name/by Customer Email">
                                      </div>
                                      <button type="submit" class="btn btn-info click"  id="search" style="margin-left: 30px">Search</button>              
                                    </form></a>
                              </div>
                         </nav>
                      </div>
                      <div class="box">
                          <div class="box-body">
                                <table class="table table-bordered" id="mytable" border="0">
                                    <tr class="mytr" >
                                        <th class="myth">Order ID</th>
                                        <th class="myth">Product name</th>
                                        <th class="myth">Product code</th>
                                        <th class="myth">Quantity</th>
                                        <th class="myth">Unit price</th>
                                        <th class="myth">Total money</th>
                                    </tr>
                                    @if(isset($dt_bills))
                                    @foreach($dt_bills as $bill)
                                    <tr>
                                        <td class="myth">{{$bill->bill_id}}</td>
                                        <td class="myth">{{$bill->product->name}}</td>
                                        <td class="myth">{{$bill->product->id}}</td>
                                        <td class="myth">{{$bill->quantity}}</td>
                                        <td class="myth">{{number_format($bill->unit_price)}}<span>&nbsp&nbsp&nbsp</span><span style="color: red">VNĐ</span></td>
                                        <td class="myth">{{number_format(($bill->quantity)*($bill->unit_price))}}<span>&nbsp&nbsp&nbsp</span><span style="color: red">VNĐ</span></td>
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
