<?php

namespace App\Classes;

class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    public function __clone()
    {
        $this->component = clone $this->component;
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}