<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('/search','HomeController@search');
Route::get('/home', 'HomeController@home');

Route::get('/admin', function(){
	return view('admin_template');
});
Route::get('/products', 'ProductController@getBooks');
// load form create
Route::get('/products/create', 'ProductController@create');
// push data to server
Route::post('/products', 'ProductController@save');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::get('/products/search', 'ProductController@search');
Route::get('/products/{product}/delete', 'ProductController@delete');

// Route::get('/login.html', function(){
// 	return view('auth.login');
// });

// Route::get('/signup.html', function(){
// 	return view('auth.signup');
// });

Route::get('products/{product}','HomeController@viewProduct');
Route::get('/pricesearch','HomeController@PriceSearch');
//Cart
Route::get('/carts/{id}/add','CartController@add');
Route::get('/carts/destroy', 'CartController@destroy');
Route::get('/checkout', 'CartController@checkout');
Route::get('/carts/{rowId}/delete', 'CartController@delete');
Route::get('/loadCarts', 'CartController@loadCarts');
Route::get('carts/{rowId}/down-count', 'CartController@down_count');
Route::get('carts/{rowId}/up-count', 'CartController@up_count');
Route::get('carts/total','CartController@total');

Route::get('/checkout/info', 'HomeController@checkoutInfo');
Route::get('/order/confirm', 'HomeController@confirmOrder');