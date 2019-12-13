<?php

namespace App\Classes;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    public abstract function getDescription(): string;
}
