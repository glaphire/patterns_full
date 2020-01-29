<?php

namespace App\Classes\Parts;

abstract class Vehicle
{
    private array $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}
