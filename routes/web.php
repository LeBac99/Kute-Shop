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
use Symfony\Component\Routing\Route as SymfonyRoute;
// client
Route::get('/', function () {
    return view('client.index');
});

// end client
// admmin
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'mod.check'], function () {
        Route::get('admin1', function () {
            return view('admin.hompage');
        });
    });
});
// end
// login
Route::get('cp-login', 'Auth\LoginController@loginForm');
Route::post('cp-login', 'Auth\LoginController@postLogin')->name('login');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
