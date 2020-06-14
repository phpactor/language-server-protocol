<?php

namespace LanguageServerProtocol;

class CodeActionOptions
{
    /**
     * CodeActionKinds that this server may return.
     * 
     * The list of kinds may be generic, such as `CodeActionKind.Refactor`, or the server
     * may list out every specific kind they provide.
     *
     * @var array<CodeActionKind>
     */
    public $codeActionKinds;

    public function __construct(array $codeActionKinds)
    {
        $this->codeActionKinds = $codeActionKinds;
    }
}