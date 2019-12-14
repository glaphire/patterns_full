<?php

namespace App;

use App\Classes\Espresso;
use App\Classes\HouseBlend;
use App\Classes\Mocha;
use App\Classes\Whip;

class Application
{
    public function run()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription() . " $" . $beverage->cost() . PHP_EOL;

        $beverage2 = new HouseBlend();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);

        echo $beverage2->getDescription() . " $" . $beverage2->cost() . PHP_EOL;
    }
}

