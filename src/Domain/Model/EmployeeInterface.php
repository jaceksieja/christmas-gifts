<?php

namespace App\Domain\Model;

interface EmployeeInterface extends ModelInterface
{
    public function getName(): string;
    public function getInterests(): iterable;
}
