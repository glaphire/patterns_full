<?php

namespace App;

use App\Classes\Singleton;

class Application
{
    public function run()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();

        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance\n";
        } else {
            echo "Singleton failed, variables contain different instances\n";
        }
    }
}
