<?php

namespace App;

use App\Classes\CurrentConditionsDisplay;
use App\Classes\WeatherData;

class Application
{
    public function run()
    {
        $weatherData = new WeatherData();
        $currConditionsDisplay = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        echo "something is running here\n";
    }
}
