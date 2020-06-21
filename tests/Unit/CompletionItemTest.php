<?php

namespace LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\Command;
use LanguageServerProtocol\CompletionItem;
use LanguageServerProtocol\MarkupContent;
use LanguageServerProtocol\Position;
use LanguageServerProtocol\Range;
use LanguageServerProtocol\TextEdit;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class CompletionItemTest extends TestCase
{
    public function testExeptionOnUnknownKey(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Parameter "foobar"');
        CompletionItem::fromArray([
            'label' => 'Barfoo',
            'foobar' => 'barfoo'
        ]);
    }

    public function testIgnoreUnknownFields(): void
    {
        $item = CompletionItem::fromArray([
            'label' => 'Barfoo',
            'foobar' => 'barfoo'
        ], true);

        self::assertEquals('Barfoo', $item->label);
    }

    public function testFromArray(): void
    {
        $item = CompletionItem::fromArray([
            'label' => 'Foobar',
            'kind' => 1,
            'detail' => 'This is foobar',
            'documentation' => [
                'kind' => 'markdown',
                'value' => 'Foobar',
            ],
            'additionalTextEdits' => [
                [
                    'range' => [
                        'start' => [
                            'line' => 5,
                            'character' => 10,
                        ],
                        'end' => [
                            'line' => 10,
                            'character' => 10,
                        ],
                    ],
                    'newText' => 'Foobar',
                ],
            ],
            'command' => [
                'title' => 'Foobar',
                'command' => 'my.command',
            ],
        ]);

        self::assertEquals(new CompletionItem(
            'Foobar',
            1,
            null,
            'This is foobar',
            new MarkupContent('markdown', 'Foobar'),
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            [
                new TextEdit(
                    new Range(
                        new Position(5, 10),
                        new Position(10, 10),
                    ),
                    'Foobar'
                )
            ],
            null,
            new Command('Foobar', 'my.command')
        ), $item);
    }
}
