<?php

namespace App\Validate;

use PHPUnit\Framework\TestCase;

class FiveTest extends TestCase
{

    public function testGetReplacementValue()
    {
        $five = new Five();
        $this->assertEquals('Five', $five->getReplacementValue());
    }

    public function testMatches()
    {
        $five = new Five();

        $this->assertTrue($five->matches(5));
    }
    public function testDoesntMatches()
    {
        $five = new Five();

        $this->assertFalse($five->matches(3));
    }
}
