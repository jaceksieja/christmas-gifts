<?php

namespace App\Infrastructure\Factory;

use App\Application\Factory\EmployeeFactoryInterface;
use App\Domain\Model\EmployeeInterface;
use App\Infrastructure\Entity\Employee;

class EmployeeFactory implements EmployeeFactoryInterface
{
    public function create(string $name, iterable $interests): EmployeeInterface
    {
        return new Employee($name, $interests);
    }
}
