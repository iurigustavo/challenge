<?php

namespace App\Output;

use PHPUnit\Framework\TestCase;

class OutputHtmlTest extends TestCase
{

    public function testPrint()
    {
        $output = new Html();
        $this->expectOutputString('1<br />');
        $output->print([1]);
    }
}
