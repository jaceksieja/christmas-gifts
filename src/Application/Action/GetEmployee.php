<?php

namespace App\Application\Action;

use App\Application\Logger\LoggerInterface;
use App\Domain\Action\CreateEmployee as BaseCreateEmployee;
use App\Domain\Action\CreateEmployeeInterface;
use App\Domain\Action\Event\EventInterface;
use App\Domain\Model\EmployeeInterface;

class GetEmployee implements CreateEmployeeInterface
{
    public function __construct(
        private readonly BaseCreateEmployee $createEmployee,
        private readonly LoggerInterface $logger
    ) {
    }

    public function __invoke(EmployeeInterface $employee): EventInterface
    {
        $event = ($this->createEmployee)($employee);

        $this->logger->event($event);

        return $event;
    }
}
