<?php


namespace App;


use App\Validate\Five;
use App\Validate\Three;
use App\Validate\ThreeFive;

/**
 *
 * Class App
 *
 * @package App
 *
 * @author  Iuri Gustavo
 */
class App
{
    /**
     * @var array|Five[]|Three[]|ThreeFive[]
     */
    private array $rules;
    /**
     * @var array
     */
    private array $list;

    public function __construct(array $rules = [])
    {
        $this->rules = $rules;
    }


    /**
     * Create list of numbers
     * $start value must be greater than 0
     *
     * @param int $start
     * @param int $end
     */
    public function make($start = 1, $end = 100): void
    {
        $this->createList($start, $end);
    }

    /**
     * @param $start
     * @param $end
     */
    private function createList($start, $end)
    {
        for ($initValue = $start; $initValue <= $end; $initValue++) {
            $this->list[] = $this->validateRule($initValue);
        }
    }

    /**
     *
     * @param int $number
     *
     * @return string
     */
    private function validateRule(int $number): string
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($number)) {
                return $rule->getReplacementValue();
            }
        }
        return $number;
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }
}