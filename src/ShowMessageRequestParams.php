<?php

namespace LanguageServerProtocol;

class ShowMessageRequestParams
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
     * The message action items to present.
     *
     * @var array<MessageActionItem>
     */
    public $actions;

    public function __construct(null $type, string $message, array $actions)
    {
        $this->type = $type;
        $this->message = $message;
        $this->actions = $actions;
    }
}