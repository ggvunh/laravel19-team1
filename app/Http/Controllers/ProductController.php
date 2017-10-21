<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function home()
    {
     //return redirect('/products');

    }

    public function getBooks()
    {
      $products = Product::all();
      return view('products.index', compact('products'));
    }

    public function create()
    {
      $categories = Category::all()->pluck('name', 'id');
      $manufacturers=Manufacturer::all()->pluck('name', 'id');
      return view('products.create', compact(['categories','manufacturers']));
    }

    public function save()
    {
      $data = Input::all();
      $product = Product::create($data);
      return redirect('/products');
    }

    public function edit(Product $product)
    {
      $categories = Category::all()->pluck('name', 'id');
      $manufacturers=Manufacturer::all()->pluck('name', 'id');
      return view('products.edit', compact(['product', 'categories','manufacturers']));
    }

    public function update(Product $product)
    {
		  $data = Input::all();
		  $product->update($data);
		  return redirect('/products');
    }
    public function search()
    {
    	$products=Product::all()->pluck('name', 'id');
    	$data =Input::all();
    	$filter=$data['filter'];
    	$name=ucfirst(strtolower($data['name']));
    	if ($filter=="Product Name") {
	    		$products = Product::all()
			     ->where('name', $name);
			    return view('products.index', compact('products'));
	    	}	     
    	else {
    			$manufacturer = Manufacturer::all()
		         ->where('name', $name)
		         ->first();
      			$products = $manufacturer->products;
    			return view('products.index', compact('products'));
    		}	
      
    }

    public function delete(Product $product)
    {
    	toastr.success('Have fun storming the castle!', 'Miracle Max Says');
      $product->delete();
      return redirect('/products');
    }

}
