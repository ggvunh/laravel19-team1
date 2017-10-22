<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->unit_price);
        $count = Cart::count();
        return response(['count' => $count], 200);
    }
    public function destroy()
    {
        Cart::destroy();
        return redirect('/');
    }
    public function checkout()
    {
        return view('products.checkout');
    }
    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect('/checkout');
    }
    public function loadCarts()
    {
        $count = Cart::count();
        $data = Cart::content();
        return response(['count' => $count, 'data' => $data], 200);
    }
        public function down_count($rowId)
    {
    
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);
        return response(['qty' => $row->qty, 'subtotal' => $row->subtotal], 200);
    }

    public function up_count($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);
        return response(['qty' => $row->qty, 'subtotal' => $row->subtotal], 200);
    }
    public function total()
    {
        $total=Cart::total();
        return response(['total'=>$total],200);
    }
}
