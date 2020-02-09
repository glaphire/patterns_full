<?php

use App\Application;
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/global_functions.php';

$application = new Application();

$application->run();