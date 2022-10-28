<?php

namespace App\Application\Action;

use App\Application\Logger\LoggerInterface;
use App\Application\Validator\ValidatorInterface;
use App\Domain\Action\CreateEmployee as BaseCreateEmployee;
use App\Domain\Action\CreateEmployeeInterface;
use App\Domain\Action\Event\EventInterface;
use App\Domain\Model\EmployeeInterface;

class CreateEmployee implements CreateEmployeeInterface
{
    public function __construct(
        private readonly BaseCreateEmployee $createEmployee,
        private readonly LoggerInterface $logger,
        private readonly ValidatorInterface $validator
    ) {
    }

    public function __invoke(EmployeeInterface $employee): EventInterface
    {
        if (!$this->validator->validate($employee)) {
            //something
        }

        $event = ($this->createEmployee)($employee);

        $this->logger->event($event);

        return $event;
    }
}
