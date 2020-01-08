<?php


namespace App\Interfaces;


interface AbstractFactoryInterface
{
    public function createProduct(): AbstractProduct;
}