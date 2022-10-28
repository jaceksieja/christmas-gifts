<?php

namespace App\Application\Validator;

use App\Application\Validator\Constraint\ConstraintInterface;
use App\Domain\Model\ModelInterface;

class Validator implements ValidatorInterface
{
    private array $constraints = [];

    public function validate(ModelInterface $model): bool
    {
        foreach ($this->constraints as $constraint) {
            if ($constraint->support($model)) {

            }
        }

        return false;
    }

    public function addConstraint(ConstraintInterface $constraint): void
    {
        $this->constraints[] = $constraint;
    }
}
