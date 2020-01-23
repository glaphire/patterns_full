<?php


namespace App\Classes;


class Open extends ElevatorState
{
    public function open()
    {
        return new Open();
    }

    public function close()
    {
        return new Close();
    }
}
