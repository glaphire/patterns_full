<?php

namespace App\Classes;

class Visitor
{
    public function visitComponent(Component $element): void
    {
        echo $element->exclusiveMethodComponent() . " + ConcreteVisitor1\n";
    }
}