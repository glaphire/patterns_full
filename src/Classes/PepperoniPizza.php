<?php


namespace App\Classes;


class PepperoniPizza extends AbstractPizza
{
    public function getIngredients(): array
    {
        return ["salami, cheese, tomato"];
    }

    public function box()
    {
        echo "Packing into small box";
    }
}