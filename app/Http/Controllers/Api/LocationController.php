<?php

namespace App\Http\Controllers\Api;
use LocationAndWeatherService;
use Illuminate\Routing\Controller as BaseController;

class LocationController extends BaseController{
    
    public function getLocation($ipAddress = null){
    	
    	//following static method will hit the location api and get the results based in ip address.
    	//if ip address is not passed in url then it will get the results based on current request location.   
    	$location = LocationAndWeatherService::getIPLocation($ipAddress);
    	
    	// return josn response
    	return response()->json($location);	
    }
}
