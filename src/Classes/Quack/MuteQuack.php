<?php


namespace App\Classes\Quack;


use App\Interfaces\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        print_r("Mute quacking\n");
    }
}
