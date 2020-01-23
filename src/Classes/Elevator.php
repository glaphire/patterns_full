<?php

namespace App\Classes;

use App\Interfaces\ElevatorStateInterface;

class Elevator
{
    private $state;

    public function __construct()
    {
        $this->state = new Stop();
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(ElevatorStateInterface $state)
    {
        $this->state = $state;

        echo "Set state to: " . get_class($state) . PHP_EOL;
    }

    public function isOpen()
    {
        return $this->state instanceof Open;
    }

    public function open()
    {
        $this->setState($this->state->open());
    }

    public function close()
    {
        $this->setState($this->state->close());
    }

    public function move()
    {
        $this->setState($this->state->move());
    }

    public function stop()
    {
        $this->setState($this->state->stop());
    }


}
