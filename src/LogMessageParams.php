<?php

namespace LanguageServerProtocol;

class LogMessageParams
{
    /**
     * The message type. See {@link MessageType}
     *
     * @var MessageType
     */
    public $type;

    /**
     * The actual message
     *
     * @var string
     */
    public $message;

    public function __construct(MessageType $type, string $message)
    {
        $this->$type = $this->$type;
        $this->$message = $this->$message;
    }
}