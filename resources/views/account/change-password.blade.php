@extends('layouts.users.layout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">home</a></li>
            <li class="active">pass</li>
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
                      <h3>Search Price</h3>
                  </div>
                  <label class="nxp-111"><b>Từ</b></label>
                  <input type="text" name="min" value="" placeholder="100$"><br>
                  <label class="nxp-111"><b>Đến</b></label>
                  <input type="text" name="max" value="" placeholder="1000$"><br>
                  <div class="center">
                      <button class="btn-danger" type="submit" name="button">serch</button>
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
                                  <h2 class="tttk"><b>Pass</b></h2><br>
                                  <form name="xuly" action="{{ url('account/change-password') }}" method="post">
                                      {!!csrf_field()!!}

                                      <label class="lb" for=""><b>Pass Old</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="password" name="oldpassword" autofocus>
                                      @if ($errors->has('oldpassword'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('oldpassword') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>

                                      <label class="lb" for=""><b>Pass New</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="password" name="newpassword">
                                      @if ($errors->has('newpassword'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('newpassword') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>

                                      <label class="lb" for=""><b>pass</b></label><span class="sp">*</span><br>
                                      <input class="ip form-control" type="password" name="repassword">
                                      @if ($errors->has('repassword'))
                                          <span class="help-block" style="color: red;">
                                              <strong>{{ $errors->first('repassword') }}</strong>
                                          </span>
                                      @endif
                                      <br><br>

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
