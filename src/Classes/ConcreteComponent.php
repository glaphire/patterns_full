<?php


namespace App\Classes;


use App\Interfaces\ComponentInterface;

class ConcreteComponent implements ComponentInterface
{
    public function operation(): string
    {
        return "Concrete Component";
    }
}

