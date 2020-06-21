<?php

namespace LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\ApplyWorkspaceEditParams;
use LanguageServerProtocol\WorkspaceEdit;
use LanguageServerProtocol\WorkspaceSymbolParams;
use PHPUnit\Framework\TestCase;

class ApplyWorkspaceEditParamsTest extends TestCase
{
    public function testFromArray(): void
    {
        $workspaceParams = ApplyWorkspaceEditParams::fromArray([
            'edit' => [],
            'label' => 'foobar',
        ]);

        self::assertEquals(new ApplyWorkspaceEditParams(
            new WorkspaceEdit(),
            'foobar'
        ), $workspaceParams);
    }
}
