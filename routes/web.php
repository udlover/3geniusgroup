<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'web'], function () {
    Route::view('/', 'login');
    Route::post('login', 'AdminController@login');
    Route::view('dashboard', 'admin.dashboard');
    route::get('/logout', 'AdminController@logout');
    Route::view('addcustomer', 'customer.add_customer');
    Route::post('add_cust', 'CustomerController@add_cust');
    Route::get('customerlist', 'CustomerController@view_cust');
    Route::get('print', 'CustomerController@print_cust');
    Route::get('custlist', 'CustomerController@cust_list');
    Route::get('print/{id}', 'CustomerController@cust_print');
});
