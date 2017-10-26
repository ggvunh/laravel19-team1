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

// Route::get('/products', 'ProductController@getBooks');
// load form create
Route::get('/products/create', 'ProductController@create');
Route::get('/search-product', 'ProductController@search');
// push data to server
Route::post('/products', 'ProductController@save');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');

Route::get('/products/{product}/delete', 'ProductController@delete');
Route::get('/products/product/{product}','ProductController@view');
Route::get('/search-order','SearchOrderController@search');
Route::get('/order-report','SearchOrderController@report');
Route::get('/orders/search','SearchOrderController@searchOrder');
Route::get('/detail-order/{order}','SearchOrderController@detail');
Route::get('/search-date','SearchOrderController@searchDate');

// Route::get('/login.html', function(){
// 	return view('auth.login');
// });
//manage Customer
Route::group(['prefix'=>'user'],function(){
		Route::get('listusers', 'UserController@listUsers');
		Route::get('editusers/{id}', 'UserController@getEditUsers');
		Route::post('editusers/{id}', 'UserController@postEditUsers');
		Route::get('deleteusers/{id}', 'UserController@deleteUsers');
		Route::get('searchusers', 'UserController@searchUser');
		Route::get('orderlists/{id}', 'UserController@getOrderlists');
	});

Route::group(['prefix'=>'account'], function(){
    Route::get('orderlists', 'AccountController@getBills');
    Route::get('orderdetail/{id}', 'AccountController@getBillDetail');
    Route::get('orderlists/{id}/delete', 'AccountController@cancelBills');
    Route::get('information', 'AccountController@getInfo');
    Route::post('information', 'AccountController@postInfo');
    });
	Route::GET('sendmail','CartController@sendmail');


Route::get('products/{product}','HomeController@viewProduct');

