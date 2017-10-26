@extends('layouts.users.layout')
@section('content')
  <div class="breadcrumbs">
      <div class="container">
          <ul class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Produce</li>
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
                        <h3>search Price</h3>
                    </div>
                    <label class="nxp-111"><b>From</b></label>
                    <input type="text" name="min" value="" placeholder="500$">
                    <br>
                    <label class="nxp-111"><b>To</b></label>
                    <input type="text" name="max" value="" placeholder="10.000.000"><br>
                    <div class="center">
                        <button class="btn-danger" type="submit" name="button">
                        Search</button>
                    </div>
                </form><br>
                
            </div>
            <div class="col-sm-9 col-right">
                <h2>List</h2>
                <table class="table table-bordered" id="mytable" border="0">
                    <tr>
                        <th class="myth">Order ID</th>
                        <th class="myth">date</th>
                        <th class="myth">Tổng cộng</th>
                        <th class="myth">order address</th>
                        <th class="myth">Tình trạng</th>
                        <th class="myth">Cancel</th>

                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td><strong><a href="{{ url('account/orderdetail/'.$order->id) }}">#{{ $order ->id }}</a></strong></td>
                        <td>{{ $order ->date_order }}</td>
                        <td>{{ $order ->total }}</td>
                        <td>{{ $order ->order_address }}</td>
                        <td> @if($order ->status==0)
                            NO Order
                            @else
                            Yes Order
                            @endif
                         </td>
                         @if($Order ->status==0)
                            <td class="myth"><span class="glyphicon glyphicon-trash"></span><a href="{{ url('account/orderlists/'.$order->id.'/delete') }}" style="color:red" class="click"> Cancel</a></td>
                         @else
                            <td class="myth"><span class="glyphicon glyphicon-lock"></span> not cancel</td>
                         @endif
                    </tr>
                    @endforeach
                </table>
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>

@stop
