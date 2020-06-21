<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

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
}
