<?php

namespace App\Classes;

use App\Interfaces\DuckInterface;
use App\Interfaces\TurkeyInterface;

class TurkeyAdapter implements DuckInterface
{
    public TurkeyInterface $turkey;

    public function __construct(TurkeyInterface $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }

}

