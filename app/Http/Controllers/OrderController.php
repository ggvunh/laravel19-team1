<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function getList(){
    $data =Order::select('id', 'total_price', 'order_address', 
    'order_phone')->orderBy('id','DESC')->get();
    	return view('layout.user.list',compact('data'));
    }
    public function getAdd(){
    	return view('layouts.users.layout');
    }
    public function postAdd(OrderRequest $request){
    	$order = new Order;
    	$order = save();
    	return redirect()->route('layouts.users.list');
    }
    public function getCancel($id){
    	$order = Order::find($id);
    	$order->cancel($id);
    	return redirect()->route('layouts.users.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complate Cancel Order'])

    }
}

