<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application;
use App\Classes\ConcreteFactory1;
use App\Classes\ConcreteFactory2;

$application = new Application();

$application->run(new ConcreteFactory1());
$application->run(new ConcreteFactory2());