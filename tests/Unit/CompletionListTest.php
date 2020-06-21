<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpactor\LanguageServerProtocol\CompletionItem;
use Phpactor\LanguageServerProtocol\CompletionList;

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
