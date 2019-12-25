<?php


namespace App\Classes;


class VeggiePizza extends AbstractPizza
{
    public function getIngredients(): array
    {
        return ["cheese", "tomato", "corn", "pepper", "spinach"];
    }

    public function box()
    {
        echo "Putting into large box";
    }
}