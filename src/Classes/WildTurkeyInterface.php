<?php

namespace App\Classes;

use App\Interfaces\TurkeyInterface;

class WildTurkeyInterface implements TurkeyInterface
{
    public function gobble(): void
    {
        echo "Gobble gobble" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I'm flying a short distance" . PHP_EOL;
    }

}

