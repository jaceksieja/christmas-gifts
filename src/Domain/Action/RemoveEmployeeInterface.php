<?php

namespace App\Domain\Action;

use App\Domain\Model\EmployeeInterface;

interface RemoveEmployeeInterface
{
    public function __invoke(EmployeeInterface $employee): bool;
}
