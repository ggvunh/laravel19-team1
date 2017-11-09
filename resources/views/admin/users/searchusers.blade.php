@extends('layouts.admin.master')
 @section('content')
    <!-- Content Header (Page header) -->
       <section class="content-header">
        <h1>
          User
          <small>Search User</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{url('admin/user/listusers')}}">User</a></li>
          <li><a href="">Search Users<a></li>
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
                      <a class="navbar-brand" class="mytile"><p class="myp">SEARCH USERS</p></a>
                    </div>
                    <form class="navbar-form navbar-left" method="get" action="{{ url('user/searchusers') }}">
                      <div class="form-group">
                        <input type="text" name="search_user" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-info click">Search</button>
                    </form>
                  </div>
                           </nav>
                      </div>
                      @if(session('infor'))    <!-- display infor -->
                     <div class="alert alert-success">
                         <p>{{ session('infor') }}</p>
                     </div>
                        @endif
                        <div class="box">
                          <div class="box-body">
                          <p><a href="{{ route('export-user') }}"><span class="glyphicon glyphicon-export"></span></a> </p>
                          <table class="table table-bordered" id="mytable" border="0">
                          <tr class="mytr" >
                      <th class="myth">User code</th>
                      <th class="myth">User name</th>
                      <th class="myth">Roles</th>
                      <th class="myth">Email</th>
                      <th class="myth">Address</th>
                      <th class="myth">Phone Number</th>
                      <th class="myth">Delete</th>
                    </tr>
                    @foreach($search_users as $search_user)
                    <tr>
                        <td >{{$search_user->id}}</td>
                        <td >{{$search_user->name}}</td>
                        <td >{{$search_user->role}}</td>
                        <td >{{$search_user->email}}</td>
                        <td >{{$search_user->address}}</td>
                        <td >{{$search_user->phone}}</td>
                        <td ><span class="glyphicon glyphicon-trash"></span><a href="{{url('user/deleteusers')}}/{{$search_user->id}}" style="color:red" class="simpleConfirm">Delete</a></td>
                    </tr>
                    @endforeach
                            </table>
                            </div>
                      </div>

                 </div>
            </div>
         </div>
        </section>
 @stop
