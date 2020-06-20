<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class CodeActionOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * CodeActionKinds that this server may return.
     * 
     * The list of kinds may be generic, such as `CodeActionKind.Refactor`, or the server
     * may list out every specific kind they provide.
     *
     * @var array<string>|null
     */
    public $codeActionKinds;

    /**
     * @param bool|null $workDoneProgress
     * @param array<string>|null $codeActionKinds
     */
    public function __construct(?bool $workDoneProgress, ?array $codeActionKinds)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->codeActionKinds = $codeActionKinds;
    }
}