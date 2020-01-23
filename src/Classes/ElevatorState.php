<?php

namespace App\Classes;

use App\Exceptions\IllegalStateTransitionException;
use App\Interfaces\ElevatorStateInterface;

class ElevatorState implements ElevatorStateInterface
{
    /**
     * @throws IllegalStateTransitionException
     */
    public function open()
    {
        throw new IllegalStateTransitionException();
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function close()
    {
        throw new IllegalStateTransitionException();
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function move()
    {
        throw new IllegalStateTransitionException();
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function stop()
    {
        throw new IllegalStateTransitionException();
    }
}
