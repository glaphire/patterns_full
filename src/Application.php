<?php

namespace App;

use App\Classes\Logger;
use App\Classes\OnboardingNotification;
use App\Classes\UserRepository;

class Application
{
    public function run()
    {
        /**
         * event dispatcher -> mediator + publisher from observer pattern
         * observer -> observer from observer pattern
         * user repository -> component + observer
         * user -> model
         * logger -> component + observer
         * onboarding notification -> component + observer
         * events() -> event dispatcher singleton on drugs
         */
        $repository = new UserRepository();
        events()->attach($repository, "facebook:update");

        $logger = new Logger(__DIR__ . "/log.txt");
        events()->attach($logger, "*");

        $onboarding = new OnboardingNotification("1@example.com");
        events()->attach($onboarding, "users:created");

        //

        $repository->initialize(__DIR__ . "users.csv");

        //

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $user->delete();
    }
}
