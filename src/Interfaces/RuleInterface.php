<?php


namespace App\Interfaces;


interface RuleInterface
{
    public function matches(int $number): bool;

    public function getReplacementValue(): string;
}