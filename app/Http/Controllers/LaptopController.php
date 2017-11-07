<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LaptopController extends Controller
{
    public function apple()
    {
    	$products=Product::where('manufacturer_id',1)->get();
    	return view('product',compact('products'));
    }

    public function asus()
    {
    	$products=Product::where('manufacturer_id',2)->get();
    	return view('product',compact('products'));
    }

    public function dell()
    {
    	$products=Product::where('manufacturer_id',3)->get();
    	return view('product',compact('products'));
    }

    public function allLaptop()
    {
    	$products=Product::where('category_id',1)->get();
    	return view('product',compact('products'));
    }
}
