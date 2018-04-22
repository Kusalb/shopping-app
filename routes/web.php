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

Route::get('/customer/show/{id}',['as'=>'customer.show','uses'=>'CustomerController@show']);
Route::get('/customer/create',['as'=>'customer.create','uses'=>'CustomerController@create']);
Route::post('/customer/store',['as'=>'customer.store','uses'=>'CustomerController@store']);
Route::get('/customer/index',['as'=>'customer.index','uses'=>'CustomerController@index']);

Route::get('/user/show/{id}',['as'=>'user.show','uses'=>'UserController@show']);
Route::get('/user/create',['as'=>'user.create','uses'=>'UserController@create']);
Route::post('/user/store',['as'=>'user.store','uses'=>'UserController@store']);
Route::get('/user/index',['as'=>'user.index','uses'=>'UserController@index']);


Route::get('/home',['uses' => 'CustomerController@index']);
Route::get('/', ['uses'=>'CustomerController@index']);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');




