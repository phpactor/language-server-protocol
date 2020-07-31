<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpactor\LanguageServerProtocol\ClientCapabilities;

class ClientCapabiltitiesTest extends TestCase
{
    public function testFromArray()
    {
        $capbilities = ClientCapabilities::fromArray([
            'experimental' => [],
        ]);
        self::assertInstanceOf(ClientCapabilities::class, $capbilities);
    }
}
