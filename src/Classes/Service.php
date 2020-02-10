<?php

namespace App\Classes;

use App\Interfaces\Logger;

class Service
{
    private Logger $logger;

    /**
     * Service constructor.
     * @param $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}