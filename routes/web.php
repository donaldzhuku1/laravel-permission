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

// Authentication Routes
Auth::routes();

// Registered and Activated User Routes
//Route::group(['middleware' => ['role:admin']], function () {
	Route::group(['middleware' => ['auth']], function () {

	Route::get('/', array( 'as' => 'home', 'uses' => 'HomeController@index' ));

});



