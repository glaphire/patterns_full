<?php

namespace App\Classes;

use App\Interfaces\Entity;
use App\Interfaces\Visitor;

class Company implements Entity
{
    private string $name;

    /**
     * @var Department[]
     */
    private array $departments;

    public function __construct(string $name, array $departments)
    {
        $this->name = $name;
        $this->departments = $departments;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitCompany($this);
    }


}