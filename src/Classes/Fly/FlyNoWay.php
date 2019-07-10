<?php


namespace App\Classes\Fly;


use App\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        print_r("Fly no way");
    }
}
