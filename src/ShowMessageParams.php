<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a notification message.
 */
class ShowMessageParams
{
    /**
     * The message type. See {@link MessageType}
     *
     * @var 1|2|3|4
     */
    public $type;

    /**
     * The actual message
     *
     * @var string
     */
    public $message;

    /**
     * @param 1|2|3|4 $type
     * @param string $message
     */
    public function __construct($type, string $message)
    {
        $this->type = $type;
        $this->message = $message;
    }
}