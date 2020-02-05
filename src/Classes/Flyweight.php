<?php

namespace App\Classes;

class Flyweight
{
    private $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation($uniqueState): void
    {
        $s = json_encode($this->sharedState);
        $u = json_encode($uniqueState);

        echo "Flyweight: Displaying shared ($s) and unique ($u) state.\n";
    }
}