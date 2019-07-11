<?php


namespace App\Classes\Fly;


use App\Interfaces\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        print_r("Fly with rocket power\n");
    }
}
