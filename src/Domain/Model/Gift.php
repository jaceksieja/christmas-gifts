<?php

namespace App\Domain\Model;

class Gift implements GiftInterface
{
    public function __construct(
        private string $name,
        private iterable $categories
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategories(): iterable
    {
        return $this->categories;
    }
}
