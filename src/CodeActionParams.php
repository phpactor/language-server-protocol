<?php

namespace LanguageServerProtocol;

class CodeActionParams
{
    /**
     * The document in which the command was invoked.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The range for which the command was invoked.
     *
     * @var Range
     */
    public $range;

    /**
     * Context carrying additional information.
     *
     * @var CodeActionContext
     */
    public $context;

    public function __construct(TextDocumentIdentifier $textDocument, Range $range, CodeActionContext $context)
    {
        $this->$textDocument = $this->$textDocument;
        $this->$range = $this->$range;
        $this->$context = $this->$context;
    }
}