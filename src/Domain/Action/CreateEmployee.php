<?php

namespace App\Domain\Action;

use App\Domain\Action\Event\EmployeeCreated;
use App\Domain\Action\Event\EventInterface;
use App\Domain\Model\EmployeeInterface;
use App\Domain\Repository\EmployeeRepositoryInterface;

class CreateEmployee implements CreateEmployeeInterface
{
    public function __construct(
        private readonly EmployeeRepositoryInterface $repository
    ) {
    }

    public function __invoke(EmployeeInterface $employee): EventInterface
    {
        $this->repository->save($employee);

        return new EmployeeCreated($employee);
    }
}
