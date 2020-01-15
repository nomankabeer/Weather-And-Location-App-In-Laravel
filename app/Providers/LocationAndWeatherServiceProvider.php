<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LocationAndWeatherService;
class LocationAndWeatherServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Binding service container LocationAndWeatherService with api key and url
        \App::bind('LocationAndWeatherService', function($app){
            return new LocationAndWeatherService(
                Config('api_key.weather_api_key') , 
                Config('api_key.open_weather_map_api') , 
                Config('api_key.free_location_api')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
