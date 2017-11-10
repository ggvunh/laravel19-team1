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
                    <label class="nxp-111"><b>Từ</b></label>
                    <input type="text" name="min" value="" placeholder="100$"><br>
                    <label class="nxp-111"><b>Đến</b></label>
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
                <h2>DANH SÁCH ĐƠN ĐẶT HÀNG</h2>
                <table class="table table-bordered" id="mytable" border="0">
                    <tr>
                        <th class="myth">Mã đơn hàng</th>
                        <th class="myth">Ngày đặt hàng</th>
                        <th class="myth">Tổng cộng</th>
                        <th class="myth">Địa chỉ giao hàng</th>
                        <th class="myth">Tình trạng</th>
                        <th class="myth">Cancel</th>

                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td><strong><a href="{{ url('account/orderdetail/'.$order->id) }}">#{{ $order ->id }}</a></strong></td>
                        <td>{{ $order ->order_date }}</td>
                        <td class="tdclass">{{number_format( $order ->total_price, 0, ',', '.')}} VNĐ</td>
                        <td>{{ $order ->order_address }}</td>
                        <td> @if($order ->status=="Pending")
                            chưa giao hàng
                            @else
                            đã giao hàng
                            @endif
                         </td>
                         @if($order ->status=="Pending")
                            <td class="myth"><span class="glyphicon glyphicon-trash"></span><a href="{{ url('user/myorder/'.$order->id.'/delete') }}" style="color:red" class="click"> Cancel</a></td>
                         @else
                            <td class="myth"><span class="glyphicon glyphicon-lock"></span> not cancel</td>
                         @endif
                    </tr>
                    @endforeach
                </table>
              
            </div><!-- /.col-right -->
            <div class="col-sm-9 col-right">
                <h2>DANH SÁCH CÁC SẢN PHẨM ĐẶT</h2></br>
                @foreach($orders as $order)
                <h3>Mã đặt hàng:#{{ $order ->id }}</h3>
                <table class="table table-bordered" id="mytable" border="0">
                    <tr>
                        <th class="myth">Tên Sản Phẩm</th>
                        <th class="myth">Sô lượng</th>
                        <th class="myth">Giá Tiền</th>
                        <th class="myth">Thành tiền</th>

                    </tr>
                    @foreach($order->orderDetails as $orderDetail)
                    <tr>
                        <td>{{ $orderDetail ->product->name }}</td>
                        <td>{{number_format( $orderDetail ->quality, 0, ',', '.')}} VNĐ</td>
                        <td>{{number_format( $orderDetail ->product->unit_price, 0, ',', '.')}} VNĐ</td>
                        <td>{{number_format( $orderDetail ->unit_price, 0, ',', '.')}} VNĐ</td>
                    </tr>
                    @endforeach
                </table>
              @endforeach
            </div><!-- /.col-right -->
        </div>
    </div>
</div><!-- /.main -->

@stop
