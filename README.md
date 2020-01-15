# square63test 
# Weather And Location App
# Test is done in Laravel

# Topic Covered
Service Provider , Facade , Service Contailer , class binding ,  Api key and url configuration through .env file.

# Clone This Test
Run the followong Commands in terminal
git clone git@github.com:nomankabeer/square63test.git
composer install
php artisan serve

# Set .env file
write command in your terminal
cp .env.example .env

Copy following and past in your .env file
OPEN_WEATHER_MAP_API_KEY=6103b0f582e78c7382bc6b0cdc06deb8
FREE_LOCATION_API = http://ip-api.com/json/
OPEN_WEATHER_MAP_API = http://api.openweathermap.org/data/2.5/weather?units=metric&

# Run this test
Go to browser

1)http://127.0.0.1:8000/api/location
2)http://127.0.0.1:8000/api/location/110.37.200.34
3)http://127.0.0.1:8000/api/weather
4)http://127.0.0.1:8000/api/weather/110.37.200.34
