<?php

namespace App\Classes;

class User
{
    private string $username;
    private string $email;

    public function __construct(string $username, string $email)
    {
        //...
        //validation logic
        //..

        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(array $state): User
    {
        //...
        //validation logic
        //..

        return new self(
            $state['username'],
            $state['email'],
        );
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
