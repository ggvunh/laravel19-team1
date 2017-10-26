<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use App\Photo;
use Illuminate\Support\Facades\Input;

class ApiProductController extends Controller
{
    public function get()
    {
      $current_page = isset($_POST['current_page']) ? $_POST['current_page'] : 1;
      $total_records=Product::count();
      $limit = isset($_GET['limit']) ? $_GET['limit'] : 10;
      $total_page = ceil($total_records / $limit);
      if ($current_page > $total_page){
          $current_page = $total_page;
      }
      else if ($current_page < 1){
          $current_page = 1;
      }
      $start = ($current_page - 1) * $limit;
      $products = Product::orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
      $previous_page=$current_page-1;
      $next_page=$current_page+1;
      // return view('products.index', compact(['products','limit','previous_page','next_page']));
      $arrayProducts=[];
      $arrayProducts['products']=$products;
      foreach ($products as $product) {
        $arrayProducts['category']=$product->category;
        $arrayProducts['manufacturer']=$product->manufacturer;
      }
      $arrayProducts['limit']=$limit;
      $arrayProducts['previous_page']=$previous_page;
      $arrayProducts['next_page']=$next_page;
      $arrayProducts['total_page']=$total_page;
      //dd($arrayProducts);
      return response($arrayProducts);
    }

    public function post(){

      $current_page = isset($_POST['current_page']) ? $_POST['current_page'] : 1;
      $total_records=Product::count();
      $limit = isset($_POST['limit']) ? $_POST['limit'] : 10;
      $total_page = ceil($total_records / $limit);
      if ($current_page > $total_page){
          $current_page = $total_page;
      }
      else if ($current_page < 1){
          $current_page = 1;
      }
      $start = ($current_page - 1) * $limit;
      $products = Product::orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
      $previous_page=$current_page-1;
      $next_page=$current_page+1;
      // return view('products.index', compact(['products','limit','previous_page','next_page']));
      $arrayProducts=[];
      $arrayProducts['products']=$products;
      foreach ($products as $product) {
        $arrayProducts['category']=$product->category;
        $arrayProducts['manufacturer']=$product->manufacturer;
      }
      $arrayProducts['limit']=$limit;
      $arrayProducts['previous_page']=$previous_page;
      $arrayProducts['next_page']=$next_page;
      $arrayProducts['total_page']=$total_page;
      //dd($arrayProducts);
      return response($arrayProducts);
    }

     public function search()
    {
      //$username = $request->old('name_product');
      //dd($username);

      $products=Product::all()->pluck('name', 'id');
      
      $filter= isset($_POST['filter']) ? $_POST['filter'] : "";
      $name=isset($_POST['name']) ? $_POST['name'] : "";
      if ($filter=="Product Name") {
          $products = Product::where('name','like','%'.$name.'%')->orderBy('created_at', 'dec')->get();
          $arrayProducts=[];
          $arrayProducts['products']=$products;
          foreach ($products as $product) {
          $arrayProducts['category']=$product->category;
          $arrayProducts['manufacturer']=$product->manufacturer;
          }
          return response($arrayProducts);
        }      
      else {
          $manufacturers = Manufacturer::where('name','like','%'.$name.'%')->get();
          $manufacturerArray=array();
          foreach ($manufacturers as $manufacturer) {
            $manufacturerArray[]=$manufacturer->id;
          }
          
          $products = Product::whereIn('manufacturer_id',$manufacturerArray)->orderBy('created_at', 'dec')->get();
          $arrayProducts=[];
          $arrayProducts['products']=$products;
          foreach ($products as $product) {
          $arrayProducts['category']=$product->category;
          $arrayProducts['manufacturer']=$product->manufacturer;
          }
          return response($arrayProducts);
          } 
    }
}
