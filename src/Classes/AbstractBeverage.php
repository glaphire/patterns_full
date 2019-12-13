<?php

namespace App\Classes;

abstract class AbstractBeverage
{
    public $description = "Unknown beverage";

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
