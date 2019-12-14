<?php


namespace App\Classes;


class Whip extends AbstractCondimentDecorator
{
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost(): float {
        return $this->beverage->cost() + 0.30;
    }

}
