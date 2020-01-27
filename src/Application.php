<?php

namespace App;

use App\Classes\CachingDownloader;
use App\Classes\SimpleDownloader;
use App\Interfaces\Downloader;

class Application
{
    public function run()
    {
        echo "Executing client code with real subject:\n";
        $realSubject = new SimpleDownloader();
        $this->clientCode($realSubject);

        echo PHP_EOL;

        echo "Executing the same client code with a proxy:\n";
        $proxy = new CachingDownloader($realSubject);
        $this->clientCode($proxy);
    }

    private function clientCode(Downloader $subject)
    {
        $result = $subject->download("http://example.com/");
        $result = $subject->download("https://refactoring.guru/ru/design-patterns/proxy/php/example#example-1");
        $result = $subject->download("http://example.com/");
        $result = $subject->download("http://example.com/");
    }
}
