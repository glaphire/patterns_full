<?php


namespace App\Classes;


class Mocha extends AbstractCondimentDecorator
{
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float {
        return $this->beverage->cost() + 0.20;
    }

}
