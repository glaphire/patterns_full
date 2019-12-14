<?php


namespace App\Classes;


class HouseBlend extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost(): float
    {
        return 0.89;
    }

    public function getDescription(): string
    {
        return $this->getDescription();
    }
}