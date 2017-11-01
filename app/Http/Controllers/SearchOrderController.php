<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use \Datetime;
use App\User;
use App\Order;
use PDF;

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

    public function exportPdf(Order $order)
    {
      $total_price=$order->orderDetails->sum('unit_price');
      // PDF::loadView('vd')->stream();
      // $pdf = PDF::loadView('order.detail', compact(['order','total_price']));
      //$pdf = App::make('dompdf.wrapper');
      $pdf=PDF::loadView('vd',compact(['order','total_price']));
      $filename = time(). "_orderdetail.pdf";
      //dd($pdf);
      // $pdf->save('myfile.pdf');
      // $pdf = App::make('dompdf.wrapper');
      // $pdf->loadHTML('<h1>Testtgh1>');bgfb&&&
      // dd($pdf);
      return $pdf->stream($filename);
      // setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
    }

    public function searchOrder()
    {
      $current_page = isset($_POST['current_page']) ? $_POST['current_page'] : 1;
      $total_records=Order::count();
      $limit = isset($_POST['limit']) ? $_POST['limit'] : 6;
      $total_page = ceil($total_records / $limit);
      $previous_page = isset($_POST['previous_page']) ? $_POST['previous_page']:1;
      $next_page = isset($_POST['next_page']) ? $_POST['next_page']:5;
      $filter= isset($_POST['filter']) ? $_POST['filter'] : "";
      $name=isset($_POST['name']) ? $_POST['name'] : "";
      $startDate= isset($_POST['start_date'])? $_POST['start_date']:"";
      $endDate=isset($_POST['end_date'])? $_POST['end_date']:"";
      if($startDate!="" && $endDate!="")
      {
        $start = ($current_page - 1) * $limit;
        $ordersData=Order::whereDate('order_date', '>=', $startDate)
          ->whereDate('order_date', '<=', $endDate);
        $total_records=$ordersData->count();
        $total_page = ceil($total_records / $limit);  
        $orders=$ordersData->orderBy('created_at', 'dec')->get();
        $total_price=$ordersData->sum('total_price');
        include("paginationOrder.php");
        $arrayOrders['orders']=$orders;
        $arrayOrders['total_price']=$total_price;
        foreach ($orders as $order) {
          $arrayOrders['user']=$order->user;
        }  
        return response($arrayOrders);  
      } 
       if($name!="")
      {
        if ($filter=="Order ID") {
          $start = ($current_page - 1) * $limit;
          $ordersData=Order::where('id', $name);
          $total_records=$ordersData->count();
          $total_page = ceil($total_records / $limit);
          $orders=$ordersData->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          $total_price=$ordersData->sum('total_price');
          include("paginationOrder.php");
          $arrayOrders['orders']=$orders;
          $arrayOrders['total_price']=$total_price;
          foreach ($orders as $order) {
            $arrayOrders['user']=$order->user;
          }  
          return response($arrayOrders);
        }
        elseif ($filter=="Customer Name") {
          $users=User::where('name', 'like', '%'.$name.'%')->get(); 
          $userArray=array();
          foreach ($users as $user) {
            $userArray[]=$user->id;
          } 
          $start = ($current_page - 1) * $limit;
          $ordersData=Order::whereIn('user_id',$userArray);
          $total_records=$ordersData->count();
          $total_page = ceil($total_records / $limit);
          $orders=$ordersData->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          $total_price=$ordersData->sum('total_price');
          include("paginationOrder.php");
          $arrayOrders['orders']=$orders;
          $arrayOrders['total_price']=$total_price;
          foreach ($orders as $order) {
            $arrayOrders['user']=$order->user;
          }  
          return response($arrayOrders);    

        }
        elseif ($filter=="Shipping Information") {
          //$orders=Order::where('status','like','%'.$name.'%' )->get();
          $start = ($current_page - 1) * $limit;
          $ordersData=Order::where('status','like','%'.$name.'%' );
          $total_records=$ordersData->count();
          $total_page = ceil($total_records / $limit);
          $orders=$ordersData->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          $total_price=$ordersData->sum('total_price');
          include("paginationOrder.php");
          $arrayOrders['orders']=$orders;
          $arrayOrders['total_price']=$total_price;
          foreach ($orders as $order) {
            $arrayOrders['user']=$order->user;
          }  
          return response($arrayOrders);
        }
        elseif ($filter=="Order date") {
          //$orders=Order::whereDate('order_date',$name)->get();
          $start = ($current_page - 1) * $limit;
          $ordersData=Order::whereDate('order_date',$name);
          $total_records=$ordersData->count();
          $total_page = ceil($total_records / $limit);
          $orders=$ordersData->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          $total_price=$ordersData->sum('total_price');
          include("paginationOrder.php");
          $arrayOrders['orders']=$orders;
          $arrayOrders['total_price']=$total_price;
          foreach ($orders as $order) {
            $arrayOrders['user']=$order->user;
          }  
          return response($arrayOrders);
        } 
      }  
      include("paginationOrder.php");
      $start = ($current_page - 1) * $limit;
      $total_price=Order::sum('total_price');
      $orders = Order::orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
      $arrayOrders['orders']=$orders;
      $arrayOrders['total_price']=$total_price;
      foreach ($orders as $order) {
        $arrayOrders['user']=$order->user;
      }
      return response($arrayOrders);
    }
}
