<?php

Route::group(['namespace' => 'Api'], function() {
	//ip address is an optional parameter for following routes.
	// if api hit with the ip address then it will get the results based on ip address
	// if api hit without ip address then it will get the result based on current user location.
	Route::get('weather/{ip_address?}' , 'WeatherController@getWeather');
	Route::get('location/{ip_address?}' , 'LocationController@getLocation');
});
