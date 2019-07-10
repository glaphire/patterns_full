<?php


namespace App\Classes\Quack;


use App\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        print_r("Squeaking");
    }
}
