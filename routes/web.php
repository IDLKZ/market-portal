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


//Registration,Login and Logout
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/login-seller', 'AuthController@loginseller')->name('login-seller');
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/777', 'AuthController@landlord')->name('777');
//End of Registration,Login and Logout


Route::group(['middleware' => 'Admin', 'namespace' => 'Admin', 'prefix' => 'landlord'], function (){
    Route::get('/', 'AdminController@index')->name('landlord');
    Route::get("/companies","AdminController@companies")->name("companies");
});
