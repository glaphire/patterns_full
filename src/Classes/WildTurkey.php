<?php

namespace App\Classes;

use App\Interfaces\Turkey;

class WildTurkey implements Turkey
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

