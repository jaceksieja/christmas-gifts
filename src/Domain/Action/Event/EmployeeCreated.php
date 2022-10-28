<?php

namespace App\Domain\Action\Event;

use App\Domain\Model\EmployeeInterface;

class EmployeeCreated implements EventInterface
{
    public function __construct(
        private readonly EmployeeInterface $employee
    ) {
    }

    public function getEmployee(): EmployeeInterface
    {
        return $this->employee;
    }
}
