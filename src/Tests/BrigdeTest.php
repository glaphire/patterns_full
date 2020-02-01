<?php

namespace App\Tests;

use App\Classes\HelloWorldService;
use App\Classes\HtmlFormatter;
use App\Classes\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BrigdeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World!', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World!</p>', $service->get());
    }
}