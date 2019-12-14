<?php

use App\Application;
require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$application = new Application();

$application->run();