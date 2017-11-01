<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class CalendarController extends Controller
{
    public function get()
    {
    	$orders=Order::all();
    	$arrayDates=array();
    	$arrayDate=array();

    	foreach ($orders as $order) {
    		$arrayDate["title"]=$order->user->name;
    		$arrayDate["start"]=$order->order_date;
    		$arrayDate["allDay"]=true;
            $url="detail-order/".$order->id;
    		$arrayDate["url"]=$url;
    		array_push($arrayDates,$arrayDate);
    	}
    	
    	return response($arrayDates,200);
    }

    public function calendar()
    {
    	return view("calendar2");
    }
}
