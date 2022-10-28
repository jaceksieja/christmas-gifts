<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\EventInterface;
use App\Domain\Model\EmployeeInterface;

interface UpdateEmployeeInterface
{
    public function __invoke(EmployeeInterface $employee): EventInterface;
}
