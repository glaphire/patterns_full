<?php

namespace App;

use App\Classes\Company;
use App\Classes\Department;
use App\Classes\Employee;
use App\Classes\SalaryReport;

class Application
{
    public function run()
    {
        $mobileDev = new Department("Mobile Development", [
            new Employee("Albert Falmore", "designer", 100000),
            new Employee("Ali Halabay", "programmer", 100000),
            new Employee("Sarah Konor", "programmer", 90000),
            new Employee("Monica Ronaldino", "QA engineer", 31000),
            new Employee("James Smith", "QA engineer", 30000),
        ]);

        $techSupport = new Department("Tech Support", [
            new Employee("Larry Ulbrecht", "supervisor", 70000),
            new Employee("Elton Pale", "operator", 30000),
            new Employee("Rajeet Kumar", "operator", 30000),
            new Employee("John Burnovsky", "operator", 34000),
            new Employee("Sergey Korolev", "operator", 35000),
        ]);

        $company = new Company("SuperStarDevelopment", [$mobileDev, $techSupport]);

        setlocale(LC_MONETARY, "en_US.utf8");
        $report = new SalaryReport();

        echo "Client: I can print a report for a whole company:\n\n";
        echo $company->accept($report);

        echo "\nClient: ...or just for a single department:\n\n";
        echo $techSupport->accept($report);
    }
}
