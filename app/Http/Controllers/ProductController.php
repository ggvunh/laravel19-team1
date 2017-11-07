<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use App\Photo;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Toastr;

class ProductController extends Controller
{
    public function home()
    {
     //return redirect('/products');

    }

    public function getproducts()
    {
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $total_records=Product::count();
      $limit = isset($_GET['limit']) ? $_GET['limit'] : 1;
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
      return view('products.index');
    }

    public function create()
    {
      $categories = Category::get();
      $manufacturers=Manufacturer::get();
      $data=array();
      $data['categories']=$categories;
      $data['manufacturers']=$manufacturers;
      return response($data,200);
    }

    public function save(CreateProductRequest $request)
    {
      $data = $request->all();
      if ($request->hasFile('illustrative_photo')  )
      {
          $file = $request->file('illustrative_photo');
          $filename = $file->getClientOriginalName(); 
          $images = time(). "_" . $filename; 
          $destinationPath = public_path('/upload');
          $file->move($destinationPath, $images);
          $data['illustrative_photo'] = $images;
          $product = Product::create($data);
      } else {
        $data['illustrative_photo'] = '';
        $product = Product::create($data);
      }
         
      if ($request->hasFile('photos') )
      {
        foreach ($request->photos as $photoo) {
          $filename = $photoo->getClientOriginalName();
          $photo= time(). "1_" . $filename;
          printf($photo); 
          $destinationPath = public_path('upload');
          $photoo->move($destinationPath, $photo);
          $data['photos'] = $photo;
          $product_id=$product->id;
          $photodata['product_id']=$product_id;
          $photodata['url']=$data['photos'];
          $photo=Photo::create($photodata);
        }
      } else {
        $data['photos']='';
      }
    }

    public function edit(Product $product)
    {
      $categories = Category::get();
      $manufacturers=Manufacturer::get();
      $image=$product->illustrative_photo;
      $photos=$product->photos->pluck('url');
      $data=array();
      $data['product']=$product;
      $data['categories']=$categories;
      $data['manufacturers']=$manufacturers;
      $data['illustrative_photo']=$image;
      $data['photos']=$photos;
      return response($data,200);
    }

    public function update(EditProductRequest $request,Product $product)
    {
		    $data = $request->all();
      if ($request->hasFile('illustrative_photo')  )
      {   
          $file = $request->file('illustrative_photo');
          $filename = $file->getClientOriginalName(); 
          $images = time(). "_" . $filename;
          $destinationPath = public_path('/upload');
          $file->move($destinationPath, $images);
          $data['illustrative_photo'] = $images;
          $product->update($data);
      } else {
          $request->illustrative_photo=$request->productimage;
          $product->update($data);
      }
          $product_id=$product->id;
          DB::table('photos')->where('product_id', $product_id)->delete();
      if ($request->hasFile('photos')) {
        foreach ($request->photos as $photoo) {
          $filename = $photoo->getClientOriginalName();
          $photo= time(). "1_" . $filename;
          $destinationPath = public_path('upload');
          $photoo->move($destinationPath, $photo);
          $data['photos'] = $photo;
          $product_id=$product->id;
          $photodata['product_id']=$product_id;
          $photodata['url']=$data['photos'];
          $photo=Photo::create($photodata);
        }
      } else {
        $photoimages=$request->photoimages;
        foreach (explode(',',$photoimages[0]) as $photoimage) {
          $photodata['product_id']=$product_id;
          $photodata['url']=$photoimage;
          $photo=Photo::create($photodata);
        }
      }  
    }
    public function search()
    {
      //$username = $request->old('name_product');
      //dd($username);
    	$products=Product::all()->pluck('name', 'id');
    	$data =Input::all();
    	$filter=$data['filter'];
    	$name=$data['name'];
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $limit = isset($_GET['limit']) ? $_GET['limit'] : 100;
    	if ($filter=="Product Name") {
	    		$dataproducts = Product::where('name','like','%'.$name.'%')->orderBy('created_at', 'dec');
          $total_records=$dataproducts->count();
          $total_page = ceil($total_records / $limit);
          if ($current_page > $total_page){
              $current_page = $total_page;
          }
          else if ($current_page < 1){
              $current_page = 1;
          }
          $start = ($current_page - 1) * $limit;
          $products=$dataproducts->offset($start)->limit($limit)->get();
          $previous_page=$current_page-1;
          $next_page=$current_page+1;
			    return view('products.index', compact('products','limit','previous_page','next_page'));
	    	}	     
    	else {
    			$manufacturers = Manufacturer::where('name','like','%'.$name.'%')->get();
          $manufacturerArray=array();
          foreach ($manufacturers as $manufacturer) {
            $manufacturerArray[]=$manufacturer->id;
          }
          
          $dataproducts = Product::whereIn('manufacturer_id',$manufacturerArray)->orderBy('created_at', 'dec');
          $total_records=$dataproducts->count();
          $total_page = ceil($total_records / $limit);
          if ($current_page > $total_page){
              $current_page = $total_page;
          }
          else if ($current_page < 1){
              $current_page = 1;
          }
          $start = ($current_page - 1) * $limit;
          $products=$dataproducts->offset($start)->limit($limit)->get();
          $previous_page=$current_page-1;
          $next_page=$current_page+1;
    			return view('products.index', compact(['products','limit','previous_page','next_page']));
    		}	
    }

    public function view(Product $product) 
    {
      $photos=$product->photos;
      return view('products.detail',compact('photos','product'));
    }

    public function delete(Product $product)
    {
      $product->delete();
    }

    public function searchProduct()
    {
      $name = isset($_POST['name']) ? $_POST['name'] : "";
      if($name=="")
      {
        return;
      }
      $manufacturers = Manufacturer::where('name','like','%'.$name.'%')->get();
      $manufacturerArray=array();
      foreach ($manufacturers as $manufacturer) {
        $manufacturerArray[]=$manufacturer->id;
      }
      $dataproducts = Product::whereIn('manufacturer_id',$manufacturerArray)->orderBy('created_at', 'dec')->limit(6)->get();
      if(count($dataproducts)==0)
      {
        $dataproducts = Product::where('name','like','%'.$name.'%')->orderBy('created_at', 'dec')->limit(6)->get();
        return response($dataproducts,200);
      }
      return response($dataproducts,200);

      
    }

}
