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
    return view('welcome');
});

Route::group(['prefix'=>'dict'], function() {
	Route::get('/color', ['uses'=>'ColorsController@execute', 'as' => 'color']);
	Route::get('/size', ['uses'=>'SizesController@execute', 'as' => 'size']);
	Route::get('/brand', ['uses'=>'BrandsController@execute', 'as' => 'brand']);
	Route::get('/season', ['uses'=>'SeasonsController@execute', 'as' => 'season']);
	Route::get('/distributor', ['uses'=>'DistributorsController@execute', 'as' => 'distributor']);
});
