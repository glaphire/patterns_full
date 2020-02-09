<?php

namespace App\Classes;

use App\Interfaces\Observer;

class OnboardingNotification implements Observer
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function update(string $event, object $emitter, $data = null)
    {
        echo "OnboardingNotification: The notification has been mailed!\n";
    }
}