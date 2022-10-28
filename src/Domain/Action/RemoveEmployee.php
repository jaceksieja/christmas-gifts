<?php

namespace App\Domain\Action;

use App\Domain\Model\EmployeeInterface;

class RemoveEmployee implements RemoveEmployeeInterface
{
    public function __invoke(EmployeeInterface $employee): bool
    {
        //soft delete
    }
}
