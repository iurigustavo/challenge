<?php


namespace App\Validate;


use App\Interfaces\RuleInterface;

class ThreeFive implements RuleInterface
{

    public function matches(int $number): bool
    {
        return $number % 15 === 0;
    }

    public function getReplacementValue(): string
    {
        return "ThreeFive";
    }
}