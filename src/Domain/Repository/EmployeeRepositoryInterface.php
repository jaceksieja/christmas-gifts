<?php

namespace App\Domain\Repository;

use App\Domain\Model\EmployeeInterface;

interface EmployeeRepositoryInterface
{
    public function save(EmployeeInterface $employee);
}
