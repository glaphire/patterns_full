<?php

namespace App;

use App\Classes\Proxy;
use App\Classes\RealSubject;
use App\Interfaces\Subject;

class Application
{
    public function run()
    {
        echo "Client: Executing the client code with a real subject:\n";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo PHP_EOL;

        echo "Client: Executing the same client code with a proxy:\n";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);
    }

    public function clientCode(Subject $subject)
    {
        $subject->request();
    }
}
