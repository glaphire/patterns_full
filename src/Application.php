<?php

namespace App;

use App\Classes\Queue;
use App\Classes\IMDBGenresScrapingCommand;

class Application
{
    public function run()
    {
        /**
         * Клиентский код.
         */

        $queue = Queue::get();

        if ($queue->isEmpty()) {
            $queue->add(new IMDBGenresScrapingCommand);
        }

        $queue->work();
    }
}
