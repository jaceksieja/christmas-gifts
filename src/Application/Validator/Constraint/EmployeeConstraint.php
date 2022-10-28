<?php

namespace App\Application\Validator\Constraint;

use App\Domain\Model\ModelInterface;

class EmployeeConstraint implements ConstraintInterface
{
    public function supports(ModelInterface $model): bool
    {
        // TODO: Implement supports() method.
    }
}
