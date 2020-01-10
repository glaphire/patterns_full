<?php declare(strict_types=1);

namespace App\Classes;

final class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct() {}

    /**
     * Gets the instance via lazy initialization (created at first usage)
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * prevent to being cloned (to create second instance)
     */
    private function __clone() {}

    /**
     * prevent to being unserialized (to create second instance)
     */
    private function __wakeup() {}
}