<?php

namespace App\Classes;

abstract class AbstractBeverage
{
    public $description = "Unknown beverage";

    abstract public function getDescription(): string;

    public abstract function cost(): float;
}
