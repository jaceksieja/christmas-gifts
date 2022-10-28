<?php

namespace App\Domain\Action;

use App\Domain\Model\EmployeeInterface;

interface GetEmployeeInterface
{
    public function __invoke(string $id): ?EmployeeInterface;
}
