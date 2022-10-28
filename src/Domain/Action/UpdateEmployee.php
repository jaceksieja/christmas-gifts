<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\EventInterface;
use App\Domain\Model\EmployeeInterface;

class UpdateEmployee implements UpdateEmployeeInterface
{
    public function __invoke(EmployeeInterface $employee): EventInterface
    {
    }
}
