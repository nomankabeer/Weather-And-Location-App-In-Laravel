<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class LocationAndWeatherFacade extends Facade{
	// Following function will make the LocationAndWeatherService class as Facade
   public static function getFacadeAccessor(){
      return 'LocationAndWeatherService';
   }
}
?>

