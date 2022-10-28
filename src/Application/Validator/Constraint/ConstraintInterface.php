<?php

namespace App\Application\Validator\Constraint;

use App\Domain\Model\ModelInterface;

interface ConstraintInterface
{
    public function supports(ModelInterface $model): bool;
}
