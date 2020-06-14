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

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param CodeActionContext $context
     */
    public function __construct(TextDocumentIdentifier $textDocument, Range $range, CodeActionContext $context)
    {
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->context = $context;
    }
}