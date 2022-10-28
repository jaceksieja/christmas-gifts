<?php

namespace App\Domain\Model;

class Employee implements EmployeeInterface
{
    public function __construct(
        private string $name,
        private iterable $interests,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInterests(): iterable
    {
        return $this->interests;
    }
}
