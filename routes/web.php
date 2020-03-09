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
// client
Route::get('/', function () {
    return view('client.index');
});

// end client
// admmin
Route::get('admin1',function(){
    return view('admin.hompage');
});
// end
