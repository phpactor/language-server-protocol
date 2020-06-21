<?php

namespace LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\CompletionItem;
use LanguageServerProtocol\CompletionList;
use PHPUnit\Framework\TestCase;

class CompletionListTest extends TestCase
{
    public function testFromArray(): void
    {
        $list = CompletionList::fromArray([
            'isIncomplete' => true,
            'items' => [
                [
                    'label' => 'Foobar'
                ]
            ]
        ]);

        self::assertEquals(new CompletionList(
            true,
            [
                new CompletionItem('Foobar'),
            ]
        ), $list);
    }
}
