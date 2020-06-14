<?php

namespace LanguageServerProtocol;

class WorkDoneProgressEnd
{
    /**
     *
     * @var 'end'
     */
    public $kind;

    /**
     * Optional, a final message indicating to for example indicate the outcome
     * of the operation.
     *
     * @var string
     */
    public $message;

    /**
     * @param 'end' $kind
     * @param string $message
     */
    public function __construct($kind, string $message)
    {
        $this->kind = $kind;
        $this->message = $message;
    }
}