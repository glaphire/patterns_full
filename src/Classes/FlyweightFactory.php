<?php

namespace App\Classes;

class FlyweightFactory
{
    private $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state)
        {
            //create flyweights with shared state
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
    }

    private function getKey(array $state): string
    {
        ksort($state);

        return implode("_", $state);
    }

    public function getFlyweight(array $sharedState): Flyweight
    {
        $key = $this->getKey($sharedState);

        if (!isset($this->flyweights[$key])) {
            echo "FlyweightFactory: can't find a flyweight, creating a new one.\n";
            $this->flyweights[$key] = new Flyweight($sharedState);
        } else {
            echo "FlyweightFactory: reusing existing flyweight.\n";
        }

        return $this->flyweights[$key];
    }

    public function listFlyweights(): void
    {
        $count = count($this->flyweights);

        echo "\nFlyweightFactory: I have $count flyweights:\n";

        foreach ($this->flyweights as $key => $flyweight) {
            echo $key . PHP_EOL;
        }
    }
}