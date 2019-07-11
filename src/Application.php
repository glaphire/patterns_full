<?php

namespace App;

use App\Classes\Duck\ModelDuck;
use App\Classes\Fly\FlyRocketPowered;

class Application
{
    public function run()
    {
        $modelDuck = new ModelDuck();

        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        $modelDuck->performFly();
        $modelDuck->performQuack();
    }
}
