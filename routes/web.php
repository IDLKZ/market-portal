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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'AuthController@login')->name('login');


Route::group(['middleware' => 'Admin', 'namespace' => 'Admin', 'prefix' => 'landlord'], function (){
    Route::get('/', 'AdminController@index');
    Route::get('/logout', 'AdminController@logout');
});

