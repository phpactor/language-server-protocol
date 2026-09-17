<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpactor\LanguageServerProtocol\CallHierarchyIncomingCallsParams;
use Phpactor\LanguageServerProtocol\CallHierarchyItem;
use Phpactor\LanguageServerProtocol\Position;
use Phpactor\LanguageServerProtocol\Range;
use Phpactor\LanguageServerProtocol\SymbolKind;

class CallHierarchyIncomingCallsParamsTest extends TestCase
{
    public function testFromArray(): void
    {
        $range = new Range(
            new Position(10, 4),
            new Position(12, 0)
        );
        $selectionRange = new Range(
            new Position(10, 4),
            new Position(10, 20)
        );

        $item = new CallHierarchyItem(
            'processMessages',
            SymbolKind::METHOD,
            'file:///path/to/file.php',
            $range,
            $selectionRange,
            null,
            'MyClass',
            null
        );

        $expected = new CallHierarchyIncomingCallsParams($item);

        $params = CallHierarchyIncomingCallsParams::fromArray([
            'item' => [
                'name' => 'processMessages',
                'kind' => SymbolKind::METHOD,
                'uri' => 'file:///path/to/file.php',
                'range' => [
                    'start' => ['line' => 10, 'character' => 4],
                    'end' => ['line' => 12, 'character' => 0],
                ],
                'selectionRange' => [
                    'start' => ['line' => 10, 'character' => 4],
                    'end' => ['line' => 10, 'character' => 20],
                ],
                'detail' => 'MyClass',
            ],
        ]);

        self::assertEquals($expected, $params);
    }
}
