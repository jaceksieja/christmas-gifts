<?php

namespace App\Application\Validator;

use App\Domain\Model\ModelInterface;

interface ValidatorInterface
{
    public function validate(ModelInterface $model): bool;
}
