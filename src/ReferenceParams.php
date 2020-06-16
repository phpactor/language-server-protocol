<?php

namespace LanguageServerProtocol;

/**
 * implements TextDocumentPositionParams, WorkDoneProgressParams, PartialResultParams
 */
class ReferenceParams
{
    /**
     *
     * @var ReferenceContext
     */
    public $context;

    /**
     * @param ReferenceContext $context
     */
    public function __construct(ReferenceContext $context)
    {
        $this->context = $context;
    }
}