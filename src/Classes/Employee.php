<?php

namespace App\Classes;

use App\Interfaces\Entity;
use App\Interfaces\Visitor;

class Employee implements Entity
{
    private $name;

    private $position;

    private $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $position
     * @param $salary
     */
    public function __construct(string $name, string $position, int $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }


    public function accept(Visitor $visitor): string
    {
        return $visitor->visitEmployee($this);
    }
}