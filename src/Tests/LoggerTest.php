<?php

namespace App\Tests;

use App\Classes\NullLogger;
use App\Classes\PrintLogger;
use App\Classes\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString("We are in App\Classes\Service::doSomething");
        $service->doSomething();
    }
}