@extends('layouts.users.layout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">home</a></li>
            <li class="active">user</li>
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
                      <h3>search</h3>
                  </div>
                  <label class="nxp-111"><b>from</b></label>
                  <input type="text" name="min" value="" placeholder="100$"><br>
                  <label class="nxp-111"><b>to</b></label>
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
              <div class="container">
                  <div class="row">
                      <div class="col-sm-1">

                      </div>
                      <div class="col-sm-11">
                          <body>
                              <div class="body">
                                  <h2 class="tttk"><b>Thông tin </b></h2><br>
                                  <form name="xuly" action="{{ url('account/information') }}" method="post">
                                      {!!csrf_field()!!}

                                      <label class="lb" for=""><b>Email</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="email" name="email" value="{{ $info->email }}" disabled>
                                      <br><br>

                                      <label class="lb" for=""><b>Tên</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="text" name="name" value="{{ $info->name }}" autofocus>
                                      @if ($errors->has('name'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>

                                      <label class="lb" for=""><b>Địa chỉ</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="text" name="address" value="{{ $info->address }}">
                                      @if ($errors->has('address'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('address') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>

                                      <label class="lb" for=""><b>Số điện thoại</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="number" name="phone" value="{{ $info->phone_number }}">
                                      @if ($errors->has('phone'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('phone') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>
                                      <label class="lb" for=""><b>Giới tính</b></label><span class="sp">*</span><br>
                                      <input class="rd" type="radio" name="gender" value="male" @if(($info ->gender) == 'Male') checked @endif> nam
                                      <input class="rd" type="radio" name="gender" value="female" @if(($info ->gender) == 'Female') checked @endif nữ<br><br>

                                      <input class="btn bton" type="submit" value="Lưu" name="submit">
                                  </form>
                              </div>
                        </body>
                      </div>
                  </div>
              </div>

          </div><!-- /.col-right -->
      </div>
  </div>
</div><!-- /.main -->

@stop
