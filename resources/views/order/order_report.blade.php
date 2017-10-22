@extends('layouts.admin.master')
	@section('content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
            <div class="form-group">
             {{--  <label>Date:</label> --}}
              <div class="form-group">
                {{-- <label>Date range button:</label> --}}
                <div class="row">
                <div class="col-md-6 col-md-offset-3"> 
                {!! Form::open(['url' => '/search-date','method'=>'get']) !!}
                  <div class="form-group">
                  {!! Form::label('start-date', 'Start date') !!}
                  <div class="form-controls">
                    {!! Form::date('start-date', null, ['class' => 'form-control']) !!}
                  </div>
                  </div>
                  <div class="form-group">
                    {!! Form::label('end-date', 'End Date') !!}
                    <div class="form-controls">
                      {!! Form::date('end-date', null, ['class' => 'form-control']) !!}
                    </div>
                  </div>
                {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
              </div>
              </div> 
                {{-- </form>
                <div class="input-group">
                  <input type="date" name="start-date">
                  <input type="date" name="end-date">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div> --}}
              </div>
              {{-- <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right">
              </div> --}}
              <!-- /.input group -->
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-hover" id="datagrid">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Order date</th>
                    <th>Status</th>
                    <th>Total money</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                      <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->user->name}}</td>
                        <td>{{ $order->order_address}}</td>
                        <td>{{ $order->order_phone}}</td>
                        <td>{{ $order->created_at}}</td>
                        <td>{{ $order->status}}</td>
                        <td>{{ $order->total_price }}</td>
                        <td><a href="{{ url('detail-order/'.$order->id) }}" >Detail</a></td>
                      </tr>
                    @endforeach 
                  </tbody>

                </table>
              </div>
              <h4>Total money: {{ $total_price }} VNĐ</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <script type="text/javascript">
    $('#daterange-btn').daterangepicker(
      
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
  </script> --}}
	@stop