<?php

namespace App\Classes;

class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:\n"
            . $this->implementation->operationImplementation();
    }
}
