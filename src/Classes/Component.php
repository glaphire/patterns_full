<?php

namespace App\Classes;

class Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitComponent($this);
    }

    public function exclusiveMethodComponent(): string
    {
        return "A";
    }
}