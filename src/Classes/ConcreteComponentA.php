<?php

namespace App\Classes;

use App\Interfaces\Component;
use App\Interfaces\Visitor;

class ConcreteComponentA implements Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}