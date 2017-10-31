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
Route::get('/products', 'ProductController@getproducts');
Route::post('/api', 'ApiProductController@post');
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'list'],function(){
		Route::get('add',['as'=>'layouts.users.getAdd','uses'=>'OrderController@getAdd']);
		Route::post('add',['as'=>'layouts.users.postAdd','uses'=>'OrderController@postAdd']);
		Route::get('list',['as'=>'layouts.users.list','uses'=>'OrderController@getList']);
		Route::get('cancel/{id}',['as'=>'layouts.users.getCancel','uses'=>'OrderController@getCancel']);
	});
});
// Route::get('/products', 'ProductController@getBooks');
// load form create
Route::get('/products/create', 'ProductController@create');
Route::post('/search-product', 'ApiProductController@search');
// push data to server
Route::post('/products', 'ProductController@save');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');

Route::get('/products/{product}/delete', 'ProductController@delete');
Route::get('/products/product/{product}','ProductController@view');
Route::get('/search-order','SearchOrderController@search');
Route::get('/order-report','SearchOrderController@report');
Route::post('/orders/search','SearchOrderController@searchOrder');
Route::get('/detail-order/{order}','SearchOrderController@detail');
Route::get('/search-date','SearchOrderController@searchDate');
Route::get('calendar','CalendarController@calendar');
Route::get('api-calendar','CalendarController@get');
Route::get('export','ExcelController@export');
Route::get('excel/users','ExcelController@exportUsers');
Route::get('excel/orders','ExcelController@exportOrders');
Route::get('/order/pdf/{order}','SearchOrderController@exportPdf');


// Route::get('/login.html', function(){
// 	return view('auth.login');
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