<?php

namespace App\Validate;

use PHPUnit\Framework\TestCase;

class ThreeFiveTest extends TestCase
{

    public function testGetReplacementValue()
    {
        $five = new ThreeFive();
        $this->assertEquals('ThreeFive', $five->getReplacementValue());
    }

    public function testMatches()
    {
        $five = new ThreeFive();

        $this->assertTrue($five->matches(90));
    }
    public function testDoesntMatches()
    {
        $five = new ThreeFive();

        $this->assertFalse($five->matches(5));
    }
}
