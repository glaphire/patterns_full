<?php

namespace App\Classes;

class Product1
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . PHP_EOL;
    }
}
