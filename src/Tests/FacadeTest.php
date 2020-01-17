<?php

namespace App\Tests;

use App\Interfaces\OperatingSystem;
use PHPUnit\Framework\TestCase;
use App\Interfaces\Bios;
use App\Classes\Facade;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);

        $bios->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());

    }
}
