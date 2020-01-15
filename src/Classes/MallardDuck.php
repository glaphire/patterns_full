<?php

namespace App\Classes;

use App\Interfaces\DuckInterface;

class MallardDuck implements DuckInterface
{
    public function quack(): void
    {
        echo "Quack" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying" . PHP_EOL;
    }
}
