<?php


namespace App\Classes;


class Espresso extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float {
        return 1.99;
    }
}
