<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PhoneController extends Controller
{
    public function iphone()
    {
    	$products=Product::where('manufacturer_id',7)->get();
    	return view('product',compact('products'));
    }

    public function samsung()
    {
    	$products=Product::where('manufacturer_id',4)->get();
    	return view('product',compact('products'));
    }

    public function oppo()
    {
    	$products=Product::where('manufacturer_id',5)->get();
    	return view('product',compact('products'));
    }

    public function sony()
    {
    	$products=Product::where('manufacturer_id',6)->get();
    	return view('product',compact('products'));
    }

    public function allPhone()
    {
    	$products=Product::where('category_id',2)->get();
    	return view('product',compact('products'));
    }


}
