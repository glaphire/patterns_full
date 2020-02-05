<?php

namespace App;

use App\Classes\FlyweightFactory;

class Application
{
    public function run()
    {
        $factory = new FlyweightFactory([
            ["Chevrolet", "Camaro2018", "pink"],
            ["Mercedes Benz", "C300", "black"],
            ["Mercedes Benz", "C500", "red"],
            ["BMW", "M5", "red"],
            ["BMW", "X6", "white"],
        ]);

        $factory->listFlyweights();

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "M5",
            "red",
            );

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "X1",
            "red",
            );

        $factory->listFlyweights();
    }

    private function addCarToPoliceDatabase(
        FlyweightFactory $ff, $plates, $owner,
        $brand, $model, $color
    ) {
        echo "\nClient: Adding a car to database.\n";
        $flyweight = $ff->getFlyweight([$brand, $model, $color]);
        $flyweight->operation([$plates, $owner]);
    }
}
