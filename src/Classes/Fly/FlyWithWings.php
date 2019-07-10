<?php


namespace App\Classes\Fly;


use App\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        print_r("Fly with wings");
    }
}
