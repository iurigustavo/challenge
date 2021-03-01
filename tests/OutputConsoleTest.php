<?php

namespace App\Output;

use PHPUnit\Framework\TestCase;

class OutputConsoleTest extends TestCase
{

    public function testPrint()
    {
        $output = new Console();
        $this->expectOutputString('1'.PHP_EOL);
        $output->print([1]);
    }
}
