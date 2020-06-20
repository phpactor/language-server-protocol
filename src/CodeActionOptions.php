<?php

namespace LanguageServerProtocol;

/**
 * implements WorkDoneProgressOptions
 */
class CodeActionOptions
{
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
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $codeActionKinds
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $codeActionKinds, ?bool $workDoneProgress)
    {
        $this->codeActionKinds = $codeActionKinds;
        $this->workDoneProgress = $workDoneProgress;
    }
}