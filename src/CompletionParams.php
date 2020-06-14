<?php

namespace LanguageServerProtocol;

class CompletionParams
{
    /**
     * The completion context. This is only available it the client specifies
     * to send this using the client capability `textDocument.completion.contextSupport === true`
     *
     * @var CompletionContext|null
     */
    public $context;

    /**
     * @param CompletionContext|null $context
     */
    public function __construct(?CompletionContext $context)
    {
        $this->context = $context;
    }
}