<?php


namespace App\Classes;


abstract class AbstractPizza
{
    protected $piecesAmount = 8;

    public function prepare()
    {
        $allIngredients = $this->getIngredients();
        $lastIngredient = array_pop($allIngredients);
        $ingredients = implode($allIngredients, ", ") . "and " . $lastIngredient;
        echo "Preparing " . $ingredients . PHP_EOL;
    }

    public function bake() {
        $pathArray = explode('\\', get_class($this));
        $class = array_pop($pathArray);
        echo "Baking " . $class . PHP_EOL;
    }

    public function cut() {
        echo "Cutting into " . $this->piecesAmount . " pieces" . PHP_EOL;
    }

    abstract public function getIngredients(): array;

    abstract public function box();
}

