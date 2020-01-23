<?php

namespace App\Interfaces;

interface ElevatorStateInterface
{
    public function open();
    public function close();
    public function move();
    public function stop();
}

