<?php

namespace App\Application\Factory;

use App\Domain\Model\EmployeeInterface;

interface EmployeeFactoryInterface
{
    public function create(string $name, iterable $interests): EmployeeInterface;
}
