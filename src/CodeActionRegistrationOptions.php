<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentRegistrationOptions, CodeActionOptions
 */
class CodeActionRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

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
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param array<string>|null $codeActionKinds
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector, ?array $codeActionKinds, ?bool $workDoneProgress)
    {
        $this->documentSelector = $documentSelector;
        $this->codeActionKinds = $codeActionKinds;
        $this->workDoneProgress = $workDoneProgress;
    }
}