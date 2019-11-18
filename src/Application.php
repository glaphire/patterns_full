<?php

namespace App;

use App\Classes\Logger;
use App\Classes\OnboardingNotification;
use App\Classes\UserRepository;

class Application
{
    /**
     * @source https://refactoring.guru/ru/design-patterns/observer/php/example
     */
    public function run()
    {
        $repository = new UserRepository();
        $repository->attach(new Logger(__DIR__ . "log.txt"), '*');
        $repository->attach(new OnboardingNotification("1@example.com"), "users:created");

        $repository->initialize(__DIR__ . "/users.csv");

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $repository->deleteUser($user);
    }
}
