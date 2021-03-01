<?php

namespace App\Validate;

use App\Interfaces\RuleInterface;

class Three implements RuleInterface
{

    public function matches(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function getReplacementValue(): string
    {
        return "Three";
    }
}