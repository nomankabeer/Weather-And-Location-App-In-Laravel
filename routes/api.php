<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['namespace' => 'Api'], function() {
	//ip address is an optional parameter for following routes.
	// if api hit with the ip address then it will get the results based on ip address
	// if api hit without ip address then it will get the result based on current user location.
	Route::get('weather/{ip_address?}' , 'WeatherController@getWeather');
	Route::get('location/{ip_address?}' , 'LocationController@getLocation');
});
