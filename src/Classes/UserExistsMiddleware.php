<?php

namespace App\Classes;

class UserExistsMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: this email is not registered!\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: wrong password!\n";

            return false;
        }

        return parent::check($email, $password);
    }
}
