<?php

namespace App\Application\Action;

use App\Application\Action\Event\EmployeesCreated;
use App\Application\ViewModel\Employee;
use App\Domain\Action\CreateEmployee;
use App\Domain\Action\Event\EventInterface;
use App\Application\Factory\EmployeeFactoryInterface;
use App\Infrastructure\Storage\StorageTransactionInterface;

class CreateEmployees
{
    public function __construct(
        private readonly CreateEmployee $createEmployee,
        private readonly EmployeeFactoryInterface $factory,
        private readonly StorageTransactionInterface $storageTransaction
    ) {
    }

    /**
     * @param iterable<int, Employee> $employees
     */
    public function __invoke(iterable $employees): EventInterface
    {
        $this->storageTransaction->start();

        $events = [];
        foreach ($employees as $employee) {
            $events[] = ($this->createEmployee)(
                $this->factory->create($employee->getName(), $employee->getInterests())
            );
        }

        $this->storageTransaction->end();

        return new EmployeesCreated($events);
    }
}
