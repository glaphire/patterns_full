<?php

namespace App\Classes;

use App\Classes\Parts\Car;
use App\Classes\Parts\Door;
use App\Classes\Parts\Engine;
use App\Classes\Parts\Vehicle;
use App\Classes\Parts\Wheel;
use App\Interfaces\Builder;

class CarBuilder implements Builder
{
    /**
     * @var Car
     */
    private Car $car;

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }
}
