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

use Illuminate\Support\Facades\Route;
// client
Route::get('/', function () {
    return view('client.index');
});
// end client
//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('index', function () {
        return view('admin.hompage');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', function () {
            return view('admin.products.list-products');
        });
        Route::get('add-product',function(){
           return view('admin.products.add_form'); 
        });


    });
});
//admin
