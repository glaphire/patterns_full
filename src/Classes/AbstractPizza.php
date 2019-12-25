<?php


namespace App\Classes;


abstract class AbstractPizza
{
    protected $piecesAmount = 8;

    public function prepare()
    {
        $lastIngredient = array_pop($this->getIngredients());
        $ingredients = implode($this->getIngredients(), ", ") . "and " . $lastIngredient;
        echo "Preparing " . $ingredients . PHP_EOL;
    }

    public function bake() {
        echo "Baking " . static::class . "pizza" . PHP_EOL;
    }

    public function cut() {
        echo "Cutting into " . $this->piecesAmount . "pieces" . PHP_EOL;
    }

    abstract public function getIngredients(): array;

    abstract public function box();
}

