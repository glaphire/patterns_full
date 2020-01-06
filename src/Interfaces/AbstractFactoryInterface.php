<?php


namespace App\Interfaces;


interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}