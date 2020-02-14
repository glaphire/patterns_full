<?php

namespace App\Classes;

use App\Interfaces\Service;

class ServiceLocator
{
    /**
     * @var string[][]
     */
    private array $services = [];

    /**
     * @var Service[]
     */
    private array $instanciated = [];

    public function addInstance(string $class, Service $service)
    {
        $this->services[$class] = $service;
    }

    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instanciated[$interface]);
    }

    public function get(string $class): Service
    {
        if (isset($this->instanciated[$class])) {
            return $this->instanciated[$class];
        }

        $args = $this->services[$class];

        switch (count($args)) {
            case 0:
                $object = new $class();
                break;
            case 1:
                $object = new $class($args[0]);
                break;
            case 2:
                $object = new $class($args[0], $args[1]);
                break;
            case 3:
                $object = new $class($args[0], $args[1], $args[2]);
                break;
            default:
                throw new \OutOfRangeException('Too many arguments given');
        }

        if (!$object instanceof Service) {
            throw new \InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instanciated[$class] = $object;

        return $object;
    }
}