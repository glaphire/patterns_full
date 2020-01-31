<?php

namespace App\Classes;

use App\Interfaces\Implementation;

class ConcreteImplementationB implements Implementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}
