<?php

namespace App\Domain\Action;

use App\Domain\Model\EmployeeInterface;

class GetEmployee implements GetEmployeeInterface
{
    public function __invoke(string $id): ?EmployeeInterface
    {
    }
}
