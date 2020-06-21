<?php

namespace LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\Color;
use PHPUnit\Framework\TestCase;

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
