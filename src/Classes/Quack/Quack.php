<?php


namespace App\Classes\Quack;


use App\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        print_r("Quack with sound\n");
    }
}