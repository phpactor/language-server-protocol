<?php

namespace LanguageServerProtocol;

class ShowMessageRequestParams
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

    /**
     * The message action items to present.
     *
     * @var array<MessageActionItem>
     */
    public $actions;

    public function __construct(MessageType $type, string $message, array $actions)
    {
        $this->$type = $this->$type;
        $this->$message = $this->$message;
        $this->$actions = $this->$actions;
    }
}