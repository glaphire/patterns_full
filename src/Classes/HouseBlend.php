<?php


namespace App\Classes;


class HouseBlend extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float
    {
        return 0.89;
    }
}