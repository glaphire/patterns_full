<?php

namespace App\Classes;

use App\Interfaces\DisplayElementInterface;
use App\Interfaces\ObserverInterface;
use App\Interfaces\SubjectInterface;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: " . $this->temperature . " F degrees"
            . " and " .$this->humidity . " % humidity\n";
    }
}
