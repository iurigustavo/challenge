<?php

namespace App;

use App\Validate\Five;
use App\Validate\Three;
use App\Validate\ThreeFive;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testConstructWithoutRules()
    {
        $app = new App();
        $this->assertInstanceOf(App::class, $app);
    }


    public function testMakeSizeWithoutRules()
    {
        $app = new App();
        $app->make(1, 100);
        $this->assertSameSize(range(1, 100), $app->getList());
    }

    public function listGenerateProvider(): array
    {
        return [
            [100],
            [30],
            [200],
        ];
    }

    /**
     * @dataProvider listGenerateProvider
     *
     * @param $end
     */
    public function testResult(int $end)
    {

        $list = [];
        for ($i = 0; $i++ < $end;) {
            $list[] = (string)[$i, 'Three', 'Five', 'ThreeFive'][!($i % 3) + 2 * !($i % 5)];
        }

        $rules = [
            new ThreeFive(),
            new Three(),
            new Five(),
        ];
        $app = new App($rules);
        $app->make(1, $end);
        $this->assertEquals($list, $app->getList());

    }

}
