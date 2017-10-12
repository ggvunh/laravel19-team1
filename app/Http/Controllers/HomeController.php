<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;
use App\Photo;
use App\Specification;
use Illuminate\Support\Facades\Input;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function search(Request $request)
    {
        $products=Product::where('name','like','%'.$request->key.'%')->paginate(12);
        return view('products.search', compact(['products','request']));

    }

    public function viewProduct(Product $product)
    {
        $photos=Photo::All()->where('product_id',$product->id);
        $specifications=Specification::All();
        return view('products.viewProduct',compact(['product','photos','specifications']));
    }

}
