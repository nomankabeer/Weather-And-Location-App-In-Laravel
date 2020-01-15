<?php
namespace App\Services;
use App\Services\BaseService;
class LocationAndWeatherService extends BaseService {
    public $openWeatherMapApiKey = null;
    public $openWeatherMapApi = null;
    public $freeLocationAPI = null;
    public function __construct($openWeatherMapApiKey , $openWeatherMapApi , $freeLocationAPI) {
        $this->openWeatherMapApiKey = $openWeatherMapApiKey;
        $this->openWeatherMapApi = $openWeatherMapApi;
        $this->freeLocationAPI = $freeLocationAPI;
    }

    public function getIPWeather($ipAddress = null){

        // calling api and get location results based on ip address if ip address is not null.
        $location = json_decode($this->CallAPI($this->freeLocationAPI.$ipAddress));

        // if ip address is incorrect then it will return error
        if($location == null || @$location->status == "fail"){
            return array('status' => 'error' , 'message' => "Something went wrong");
        }

        $weatherURL = $this->openWeatherMapApi."q={$location->city},{$location->countryCode}&appid={$this->openWeatherMapApiKey}";
        // calling api to get weather results based on ip address.
        $weather = json_decode($this->CallAPI($weatherURL));
        // format response of api results
        $formatData = $this->getFormatWeatherResponse($weather , $location->query);
        return $formatData;
    }

    private function getFormatWeatherResponse( $data , $ipAddress ){
        // format response api
        $response = [
            "ip" => $ipAddress,
            "city" => $data->name,
            "temperature" => [
                "current" => $data->main->temp,
                "low" => $data->main->temp_min,
                "high" => $data->main->temp_max
            ],
            "wind" => [
                "speed" => $data->wind->speed,
                "direction" => $data->wind->deg
            ]
        ];
        return $response;
    }

    public function getIPLocation($ipAddress = null){

        // calling api and get location results.
        $location = json_decode($this->CallAPI($this->freeLocationAPI.$ipAddress));

        // if ip address is incorrect or if we do not get any response from api then it will return error
        if($location == null || @$location->status == "fail"){
            return array('status' => 'error' , 'message' => "Something went wrong");
        }

        // format response of api results
        $formatData = $this->getFormatLocationResponse($location , $ipAddress);
        return $formatData;
    }

    private function getFormatLocationResponse($data){
            // format response api results
            $response = [
            "ip" => $data->query,
            "geo" => [
                "country" => $data->country,
                "city" => $data->city,
                "region" => $data->region,
                "region_name" => $data->regionName,
            ]
        ];
        return $response;
    }
}
