<?php

namespace App\Classes;

use App\Classes\Parts\Door;
use App\Classes\Parts\Engine;
use App\Classes\Parts\Truck;
use App\Classes\Parts\Vehicle;
use App\Classes\Parts\Wheel;
use App\Interfaces\Builder;

class TruckBuilder implements Builder
{
    /**
     * @var Truck
     */
    private Truck $truck;

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}