<?php


namespace App\Validate;


use App\Interfaces\RuleInterface;

class Five implements RuleInterface
{

    public function matches(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function getReplacementValue(): string
    {
        return 'Five';
    }
}