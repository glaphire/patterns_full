<?php

namespace App\Tests;

use App\Classes\StorageAdapter;
use App\Classes\User;
use App\Classes\UserMapper;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter(
            [
                1 => [
                    'username' => 'domnik1',
                    'email' => 'liebler.dominik@gmail.com',
                ]
            ]
        );

        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}