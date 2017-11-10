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
            <div class="col-sm-3 col-left">
                <img src="images/lienhe.gif" alt="lien he qc" style="max-width:100%; margin-top: 20px; min-width:100%">
                <form class="form-search-nxp" method="GET" action="search-is-price">
                    <div class="form-nxp">
                        <h3>Search</h3>
                    </div>
                    <label class="nxp-111"><b>from</b></label>
                    <input type="text" name="min" value="" placeholder="100$"><br>
                    <label class="nxp-111"><b>To</b></label>
                    <input type="text" name="max" value="" placeholder="1000$"><br>
                    <div class="center">
                        <button class="btn-danger" type="submit" name="button">Search</button>
                    </div>
                </form><br>
                <div class="banner-left"><a href="#"><img src="images/products/0.png" alt="hinh anh"></a>
                    <div class="banner-content">
                        <h1>Khuyến mãi</h1>
                        <h2>20%</h2>
                        <p></p>
                        <a href="#">mua ngay</a>
                    </div>
                </div>
            </div>
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
