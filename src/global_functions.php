<?php

namespace App;

use App\Classes\EventDispatcher;

function events(): EventDispatcher
{
    static $eventDispatcher;

    if (!$eventDispatcher) {
        $eventDispatcher = new EventDispatcher();
    }

    return $eventDispatcher;
}