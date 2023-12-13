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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/home', 'HomeController@home');
    
    //menu items
    Route::resource('menu-items', 'ProductController');

    //Restaurant
    Route::resource('restaurants', 'RestaurantController');

    //category
    Route::resource('category', 'CategoryController');
    
    
});



