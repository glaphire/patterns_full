<?php

namespace App\Classes;

class Move extends ElevatorState
{
    public function move()
    {
        return new Move();
    }

    public function stop()
    {
        return new Stop();
    }
}
