<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Toastr;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function listOrders ()
    {
        return view('admin.orders.list-orders');
    }

    public function detailOrder ($id)
    {
        $dt_orders = OrderDetail::where('order_id',$id)->get();
        return view('admin.orders.detail-order')->with(['dt_orders'=>$dt_orders]);
    }

    public function checkOrder ($id)
    {
        $check = Order:: find($id);
        $check->status = '1';
        $check->save();
        Toastr::success('Check successful Order', $title = null, $options = []);
        return view('admin.orders.list-orders');
    }

    public function Calendar()
    {   
        $result_calendar = [0];
        $dilevery_order = Order::all();
        for($i=0;$i<count( $dilevery_order);$i=$i+1){
             $x = $dilevery_order[$i]->date_order;
             $t = getdate(strtotime($x));
             $u = $t['mday'];
             array_push( $result_calendar,$u);
        }
        return view('admin.calendar.calendar')->with(['result_calendar'=>$result_calendar]);
    }

    public function Calendar_detal($date)
    {   
        $count =0;
        $curent_date = getdate(strtotime(date('Y-m-d')));
        $time = $curent_date['year'].'-'.$curent_date['mon'].'-'.$date;
        $calendar_detal_result = Order::where('date_order',$time)->get();
        for($i=0;$i<count($calendar_detal_result);$i=$i+1){
            $count = $count + $calendar_detal_result[$i]->total;
        }
        return view('admin.calendar.calendar_detail')->with(['calendar_detal_result'=> $calendar_detal_result,'count'=> $count]);
    }

}