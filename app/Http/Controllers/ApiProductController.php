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
    
    public function post(){
      $current_page = isset($_POST['current_page']) ? $_POST['current_page'] : 1;
      $total_records=Product::count();
      $limit = isset($_POST['limit']) ? $_POST['limit'] : 6;
      $total_page = ceil($total_records / $limit);
      $previous_page = isset($_POST['previous_page']) ? $_POST['previous_page']:1;
      $next_page = isset($_POST['next_page']) ? $_POST['next_page']:5;
      $filter= isset($_POST['filter']) ? $_POST['filter'] : "";
      $name=isset($_POST['name']) ? $_POST['name'] : "";
      if($name!="")
      {
        if ($filter=="Product Name") {
          $start = ($current_page - 1) * $limit;
          $total_records=Product::where('name','like','%'.$name.'%')->count();
          $total_page = ceil($total_records / $limit);
          $products = Product::where('name','like','%'.$name.'%')->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          include("paginationProduct.php");
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
          $start = ($current_page - 1) * $limit;
          $total_records=Product::whereIn('manufacturer_id',$manufacturerArray)->count();
          $total_page = ceil($total_records / $limit);
          $products = Product::whereIn('manufacturer_id',$manufacturerArray)->orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
          include("paginationProduct.php");
          $arrayProducts['products']=$products;
          foreach ($products as $product) {
          $arrayProducts['category']=$product->category;
          $arrayProducts['manufacturer']=$product->manufacturer;
          }
          return response($arrayProducts);
          } 
      }
      include("paginationProduct.php");
      $start = ($current_page - 1) * $limit;
      $products = Product::orderBy('created_at', 'dec')->offset($start)->limit($limit)->get();
      $arrayProducts['products']=$products;
      foreach ($products as $product) {
        $arrayProducts['category']=$product->category;
        $arrayProducts['manufacturer']=$product->manufacturer;
      }
      $arrayProducts['limit']=$limit;
      return response($arrayProducts);
    }
  
}
