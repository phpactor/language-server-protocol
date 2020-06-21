<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpactor\LanguageServerProtocol\Color;

class ColorTest extends TestCase
{
    public function testFromArray()
    {
        $color = Color::fromArray([
            'red' => 0,
            'green' => 100,
            'blue' => 50,
            'alpha' => 200,
        ]);

        self::assertEquals(new Color(0, 100, 50, 200), $color);
    }
}
