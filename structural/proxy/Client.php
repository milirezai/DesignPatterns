<?php

namespace Structural\proxy;

require_once __DIR__.'/../../vendor/autoload.php';

use Structural\proxy\WeatherServiceProxy;

class Client
{
    public static function run(): void
    {
       $weatherService = new WeatherServiceProxy('weather-api','https:// weather.com');
        $weatherService->request();
    }
}


    Client::run();