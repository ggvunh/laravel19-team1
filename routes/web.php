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
Route::post('/searchproduct', 'ProductController@searchProduct');


Route::group(['prefix'=>'laptop'],function(){
	Route::get('/','LaptopController@allLaptop');
	Route::get('apple','LaptopController@apple');
	Route::get('asus','LaptopController@asus');
	Route::get('dell','LaptopController@dell');
});
Route::group(['prefix'=>'phone'],function(){
	Route::get('/','PhoneController@allPhone');
	Route::get('iphone','PhoneController@iphone');
	Route::get('samsung','PhoneController@samsung');
	Route::get('oppo','PhoneController@oppo');
	Route::get('sony','PhoneController@sony');
});

Route::group(['middleware' => ['auth','isAdmin']],function(){
	Route::get('/admin', function(){
		return view('admin_template');
	});
	Route::get('/products', 'ProductController@getproducts');
	Route::post('/api', 'ApiProductController@post');
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
});

Route::get('products/{product}','HomeController@viewProduct');
Route::get('/pricesearch','HomeController@PriceSearch');
//Cart
Route::get('product','HomeController@product');
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
//Tuong linh
Route::group(['prefix'=>'user'],function(){
    Route::get('listusers', 'UserController@listUsers');
    Route::get('editusers/{id}', 'UserController@getEditUsers');
    Route::post('editusers/{id}', 'UserController@postEditUsers');
    Route::get('deleteusers/{id}', 'UserController@deleteUsers');
    Route::get('searchusers', 'UserController@searchUser');
    Route::get('orderlists/{id}', 'UserController@getOrderlists');
    Route::get('export-user', 'ExcelController@ExportExcel')->name('export-user');
});

Route::group(['prefix'=>'account'], function(){
	Route::get('orderlists', 'AccountController@getOrders');
	Route::get('orderdetail/{id}', 'AccountController@getOrderDetail');
	Route::get('orderlists/{id}/delete', 'AccountController@cancelOrders');
	Route::get('information', 'AccountController@getInfo');
	Route::post('information', 'AccountController@postInfo');
	Route::get('change-password', 'AccountController@getPass');
	Route::post('change-password', 'AccountController@postPass');
});
