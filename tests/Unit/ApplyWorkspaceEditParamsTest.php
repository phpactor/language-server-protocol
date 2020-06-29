<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\WorkspaceEdit as LanguageServerProtocolWorkspaceEdit;
use PHPUnit\Framework\TestCase;
use Phpactor\LanguageServerProtocol\WorkspaceEdit;
use Phpactor\LanguageServerProtocol\ApplyWorkspaceEditParams;

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

    public function testIgnoresObjects(): void
    {
        $workspaceParams = ApplyWorkspaceEditParams::fromArray([
            'edit' => new WorkspaceEdit(),
            'label' => 'foobar',
        ]);

        self::assertEquals(new ApplyWorkspaceEditParams(
            new WorkspaceEdit(),
            'foobar'
        ), $workspaceParams);
    }
}
