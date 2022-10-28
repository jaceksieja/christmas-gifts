<?php

namespace App\Application\ViewModel;

class Gift
{
    public function __construct(
        private ?string $name = null,
        private ?iterable $categories = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCategories(): iterable
    {
        return $this->categories;
    }

    /**
     * @param array<int, string> $categories
     */
    public function setCategories(iterable $categories): void
    {
        $this->categories = $categories;
    }
}
