<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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
     * @var array<MessageActionItem>|null
     */
    public $actions;

    /**
     * @param 1|2|3|4 $type
     * @param string $message
     * @param array<MessageActionItem>|null $actions
     */
    public function __construct($type, string $message, ?array $actions = null)
    {
        $this->type = $type;
        $this->message = $message;
        $this->actions = $actions;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}