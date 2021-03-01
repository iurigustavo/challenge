<?php

namespace App\Validate;

use PHPUnit\Framework\TestCase;

class ThreeTest extends TestCase
{

    public function testGetReplacementValue()
    {
        $five = new Three();
        $this->assertEquals('Three', $five->getReplacementValue());
    }

    public function testMatches()
    {
        $five = new Three();

        $this->assertTrue($five->matches(3));
    }
    public function testDoesntMatches()
    {
        $five = new Three();

        $this->assertFalse($five->matches(5));
    }
}
