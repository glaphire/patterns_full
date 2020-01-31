<?php

namespace App\Classes;

class ComponentWithBackReference
{
    public $prototype;

    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}