<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

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
     * @var string|null
     */
    public $message;

    /**
     * @param 'end' $kind
     * @param string|null $message
     */
    public function __construct($kind, ?string $message = null)
    {
        $this->kind = $kind;
        $this->message = $message;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}