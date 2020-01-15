# square63test 
# Weather And Location App
# Test is done in Laravel

# Topic Covered
Service Provider , Facade , Service Contailer , class binding ,  Api key and url configuration through .env file.

# Clone This Test
Run the followong Commands in terminal <br/>
git clone git@github.com:nomankabeer/square63test.git <br/>
composer install <br/>
php artisan serve <br/>

# Set .env file
write command in your terminal <br/>
cp .env.example .env <br/>

Copy following and past in your .env file
OPEN_WEATHER_MAP_API_KEY=6103b0f582e78c7382bc6b0cdc06deb8 <br/>
FREE_LOCATION_API = http://ip-api.com/json/ <br/>
OPEN_WEATHER_MAP_API = http://api.openweathermap.org/data/2.5/weather?units=metric& <br/>

# Run this test
Go to browser <br/>

1)http://127.0.0.1:8000/api/location <br/>
2)http://127.0.0.1:8000/api/location/110.37.200.34 <br/>
3)http://127.0.0.1:8000/api/weather <br/>
4)http://127.0.0.1:8000/api/weather/110.37.200.34 <br/>
