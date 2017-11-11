@extends('layouts.users.layout')
@section('content')

  <div class="breadcrumbs">
      <div class="container">
          <ul class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Sản phẩm</li>
          </ul>
      </div>
  </div>

  <div class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-right">
                <h2>ĐƠN HÀNG #{{ $id }}</h2>

                 <h3>Chi tiết đơn hàng</h3><br>
                 <table class="table table-bordered" id="mytable" border="0">
                     <tr>
                         <th class="myth">Sản phẩm</th>
                         <th class="myth">Số lượng</th>
                         <th class="myth">Thành tiền</th>
                     </tr>
                     @foreach($billdetails as $billdetail)
                     <tr>
                         <td>{{ $billdetail->product->name }}</td>
                         <td>{{ $billdetail->quantity }}</td>
                         <td>{{ $billdetail->unit_price }}</td>
                     </tr>
                     @endforeach
                 </table><br>
                 <h3>Thông tin khách hàng</h3><br>
                 <table class="table table-bordered" id="mytable" border="0">
                     <tr>
                         <th>Name</th>
                         <td>{{ Auth::user()->name }}</td>
                     </tr>
                     <tr>
                         <th>phone</th>
                         <td>{{ Auth::user()->phone_number }}</td>
                     </tr>
                     <tr>
                         <th>Email</th>
                         <td>{{ Auth::user()->email }}</td>
                     </tr>
                     <tr>
                         <th>Địa chỉ</th>
                         <td>{{ Auth::user()->address }}</td>
                     </tr>
                 </table><br>
            </div>
        </div>
    </div>
</div>

@stop
