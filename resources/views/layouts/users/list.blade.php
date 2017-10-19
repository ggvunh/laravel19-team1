@extends('layouts.users.layout')

@section('content')

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
       <tr align="center">
           <th>ID</th>
           <th>Order Date</th>
           <th>total Price</th>
           <th>Order Address</th>
           <th>Order Phone</th>
           <th>Order Status</th>
           <th>Cancel</th>
       </tr> 
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach ($data as $item)
        <?php $stt = $stt + 1 ?>
        <tr class="odd-gradeX" align="center">
            <td>{!!$stt!!}</td>
            <td>{!! $item["id"] !!}</td>
            <td>
              <?php
                $id = DB::table('orders')->where('id',$item['id'])->first();
                echo $order->user_id;
              ?>
            </td>
            <td class="center">
              <i class="fa fa-trash-o fa-fw"></i>
              <a href="{!!URL::route('layouts.users.getCancel',$item['id'])!!}">Cancel 
              </a>
            </td>
            <td></td>
        </tr>
        @andforeach
    </tbody>
</table>

@endsection