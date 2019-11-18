<?php

namespace App\Classes;

use SplSubject;
use SplObserver;

class OnboardingNotification implements SplObserver
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(SplSubject $repository, string $event = null, $data = null): void
    {
        echo self::class . ": the notification has been mailed\n";
    }
}
