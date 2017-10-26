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
                        Search
                        </button>
                    </div>
                </form><br>
            </div>
            <div class="col-sm-9 col-right">
                <h2>Order Form #{{ $id }}</h2>

                 <h3>Order details</h3><br>
                 <table class="table table-bordered" id="mytable" border="0">
                     <tr>
                         <th class="myth">Product</th>
                         <th class="myth">Quantity</th>
                         <th class="myth">unit_price</th>
                     </tr>
                     @foreach($orderdetails as $orderdetail)
                     <tr>
                         <td>{{ $orderdetail->product->name }}</td>
                         <td>{{ $orderdetail->quantity }}</td>
                         <td>{{ $orderdetail->unit_price }}</td>
                     </tr>
                     @endforeach
                 </table><br>
                 <h3>Customer</h3><br>
                 <table class="table table-bordered" id="mytable" border="0">
                     <tr>
                         <th>name</th>
                         <td>{{ Auth::user()->name }}</td>
                     </tr>
                     <tr>
                         <th>Phone</th>
                         <td>{{ Auth::user()->phone_number }}</td>
                     </tr>
                     <tr>
                         <th>Email</th>
                         <td>{{ Auth::user()->email }}</td>
                     </tr>
                     <tr>
                         <th>adress</th>
                         <td>{{ Auth::user()->address }}</td>
                     </tr>
                 </table><br>
            </div>
        </div>
    </div>
</div>

@stop
