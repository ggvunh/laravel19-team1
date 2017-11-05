<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;
use App\Photo;
use App\Specification;
use Illuminate\Support\Facades\Input;
use App\User,Auth;
use App\Order;
use App\OrderDetail;
use Cart;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.users.layout');
    }
    public function home()
    {
        return view('layouts.users.layout');
    }
    public function product()
    {
      return view('product');
    }
    public function search(Request $request)
    {
        $products=Product::where('name','like','%'.$request->key.'%')->paginate(12);
        return view('products.search', compact(['products','request']));

    }

    public function viewProduct(Product $product)
    {
        $photos=Photo::All()->where('product_id',$product->id);
        $specifications=Specification::All()->where('product_id',$product->id);
        return view('products.viewProduct',compact(['product','photos','specifications']));
    }
    public function PriceSearch(Request $request)
    {
        $pricesearch=Input::get();

        switch ($pricesearch['pricesearch'])
        {
            case 1:
                $products=Product::All()->where('unit_price','<=',50);
                return view('products.pricesearch', compact('products'));
                dd($products);
                break;
            case 2:
                $products=Product::All()->where('unit_price','>',50)->where('unit_price','<=',150);
                return view('products.pricesearch', compact('products'));
                break;
            case 3:
                $products=Product::All()->where('unit_price','>',150)->where('unit_price','<=',300);
                return view('products.pricesearch', compact('products'));
                break;
            case 4:
                $products=Product::All()->where('unit_price','>',300)->where('unit_price','<=',500);
                return view('products.pricesearch', compact('products'));
                break;
            case 5:
                $products=Product::All()->where('unit_price','>=',500);
                return view('products.pricesearch', compact('products'));
                break;
        }

    }
    public function checkoutInfo()
    {
        $user=Auth::user();
        return view('products.checkoutinfo',compact('user'));
    }
    public function confirmOrder()
    {
        $ldate = Carbon::today()->toDateString();
        $order_data= new Order;
        $order_detail=new OrderDetail;
        $order_data_input= Input::all();
        $user=Auth::user();

        $order_data->order_date=$ldate;
        $order_data->user_id=Auth::user()->id;
        $order_data->total_price=Cart::total();
        $order_data->order_address=$order_data_input['order_address'];
        $order_data->order_phone=$order_data_input['order_phone'];
        $order_data->save();


        foreach (\Cart::content() as $row)
        {
            $order_detail->order_id=$order_data->id;
            $order_detail->product_id=$row->id;
            $order_detail->quality=intval($row->qty);
            $order_detail->unit_price=$row->price;
            $order_detail->save();
        }
        Cart::destroy();
        //dd($order_data,$order_detail,$order_data_input,\Cart::content());
        return redirect('/');

    }
}
