<?php

namespace App\Classes;

use App\Interfaces\Implementation;

class Abstraction
{
    /**
     * @var Implementation
     */
    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation(): string
    {
        return "Abstraction: Base operation with: \n" .
            $this->implementation->operationImplementation();
    }
}
