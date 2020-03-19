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
    Route::get('products',function(){
        return view('admin.products.list-products');
    });
    Route::group(['prefix'=>'Category'],function(){
    	Route::get('','Admin\CategoryController@Category')->name('get.Category');
    	Route::get('addCategory','Admin\CategoryController@addCategory')->name('get.addCategory');
    	Route::get('editCategory/{id}','Admin\CategoryController@editCategory')->name('get.editCategory');
        Route::get('deleteCategory/{id}','Admin\CategoryController@deleteCategory')->name('get.deleteCategory');
        Route::post('postAddCategory','Admin\CategoryController@postAddCategory')->name('post.addCategory');
        Route::post('posteditCategory/{id}','Admin\CategoryController@posteditCategory')->name('post.editCategory');
    });
});
//admin