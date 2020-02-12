<?php

namespace App\Interfaces;

use App\Classes\Company;
use App\Classes\Department;
use App\Classes\Employee;

interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}