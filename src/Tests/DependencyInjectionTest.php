<?php

namespace App\Tests;

use App\Classes\DatabaseConfiguration;
use App\Classes\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnik1', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('domnik1:1234@localhost:3306', $connection->getDsn());
    }
}