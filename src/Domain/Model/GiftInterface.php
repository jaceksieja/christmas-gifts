<?php

namespace App\Domain\Model;

interface GiftInterface extends ModelInterface
{
    public function getName(): string;
    public function getCategories(): iterable;
}
