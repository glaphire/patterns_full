<?php


namespace App\Classes;


class Singleton
{
    private static $instances = [];

    /**
     * Singleton can't be instantiated
     */
    protected function __construct()
    {
    }

    /**
     * Singleton can't be cloned
     */
    protected function __clone()
    {
    }

    /**
     * Singleton shouldn't be recovered from a string
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(static::$instances[$cls])) {
            static::$instances[$cls] = new static;
        }

        return static::$instances[$cls];
    }
}
