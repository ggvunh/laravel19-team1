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
