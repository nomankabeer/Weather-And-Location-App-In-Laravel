<?php

namespace App\Http\Controllers\Api;
use LocationAndWeatherService;
use Illuminate\Routing\Controller as BaseController;

class WeatherController extends BaseController{
    
    public function getWeather($ipAddress = null){
    	
    	//following static method will hit the weather api and get the weather results based in ip address.
    	//if ip address is not passed in url then it will get the results based on current request location.   
    	$weather = LocationAndWeatherService::getIPWeather($ipAddress);

    	// return josn response
    	return response()->json($weather);	
    }
}
