<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use \Datetime;
use App\User;
use App\Order;


class SearchOrderController extends Controller
{
	public function report()
	{
		$orders=Order::all();
        $total_price=$orders->sum('total_price');
		return view('order.order_report',compact(['orders','total_price']));
	}
    public function search()
    {
    	$orders=Order::all();
    	return view('order.search_order',compact('orders'));

    }

    public function detail(Order $order)
    {
        //dd($order);
        $total_price=$order->orderDetails->sum('unit_price');
        return view('order.detail',compact(['order','total_price']));
    }

    public function searchDate()
    {
        $data=Input::all();
        $ordersData=Order::whereDate('created_at','>=' ,$data['start-date'])
            ->whereDate('created_at','<=' ,$data['end-date']);
        $orders=$ordersData->get();
        $total_price=$ordersData->sum('total_price');  
        return view('order.order_report',compact(['orders','total_price']));
    }

    public function searchOrder()
    {
    	$data=Input::all();
    	$orders=Order::all();
    	$users=User::all();
    	if ($data["search_param"]=="orderid") {
			$orders=Order::where('id', $data["x"])->get();
		}
    	elseif ($data["search_param"]=="customer") {
    		$users=User::where('name', 'like', '%'.$data["x"].'%')
                ->get(); 
                $userArray=array();
                foreach ($users as $user) {
                 	$userArray[]=$user->id;
                 } 
            $orders=Order::whereIn('user_id',$userArray)->get();
    	}
    	elseif ($data["search_param"]=="shipping") {
    		$orders=Order::where('status','like','%'.$data["x"].'%' )->get();
    	}
    	elseif ($data["search_param"]=="orderdate") {
            $orders=Order::whereDate('created_at',$data["x"])->get();
    	} 
    	return view('order.search_order',compact('orders'));
    }

}
