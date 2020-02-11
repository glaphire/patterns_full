<?php

namespace App\Interfaces;

use App\Classes\ConcreteComponentA;
use App\Classes\ConcreteComponentB;

interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}