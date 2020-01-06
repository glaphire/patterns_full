<?php


namespace App\Interfaces;


interface AbstractFactoryInteface
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}