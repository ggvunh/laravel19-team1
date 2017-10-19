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
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'list'],function(){
		Route::get('add',['as'=>'layouts.users.getAdd','uses'=>'OrderController@getAdd']);
		Route::post('add',['as'=>'layouts.users.postAdd','uses'=>'OrderController@postAdd']);
		Route::get('list',['as'=>'layouts.users.list','uses'=>'OrderController@getList']);
		Route::get('cancel/{id}',['as'=>'layouts.users.getCancel','uses'=>'OrderController@getCancel']);
	});
});
