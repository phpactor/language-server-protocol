<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, CodeActionOptions
 */
class CodeActionRegistrationOptions
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
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * @param bool|null $workDoneProgress
     * @param array<string>|null $codeActionKinds
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     */
    public function __construct(?bool $workDoneProgress, ?array $codeActionKinds, $documentSelector)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->codeActionKinds = $codeActionKinds;
        $this->documentSelector = $documentSelector;
    }
}