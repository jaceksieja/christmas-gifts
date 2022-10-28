<?php

namespace App\Domain\Repository;

use App\Domain\Model\GiftInterface;

interface GiftRepositoryInterface
{
    public function save(GiftInterface $gift);
}
