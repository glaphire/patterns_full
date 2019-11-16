<?php

namespace App\Classes;

use App\Interfaces\ObserverInterface;
use App\Interfaces\SubjectInterface;

class WeatherData implements SubjectInterface
{
    /**
     * @var float $temperature
     */
    private $temperature;

    /**
     * @var float $humidity
     */
    private $humidity;

    /**
     * @var float $pressure
     */
    private $pressure;

    private $observers = [];

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
           $observer->update($this->temperature, $this->pressure, $this->humidity);
        }
    }

    public function getTemperature()
    {
        $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();

        return null;
    }
}
