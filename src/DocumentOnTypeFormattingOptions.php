<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Provider options for a [DocumentOnTypeFormattingRequest](#DocumentOnTypeFormattingRequest).
 */
class DocumentOnTypeFormattingOptions
{
    /**
     * A character on which formatting should be triggered, like `}`.
     *
     * @var string
     */
    public $firstTriggerCharacter;

    /**
     * More trigger characters.
     *
     * @var array<string>|null
     */
    public $moreTriggerCharacter;

    /**
     * @param string $firstTriggerCharacter
     * @param array<string>|null $moreTriggerCharacter
     */
    public function __construct(string $firstTriggerCharacter, ?array $moreTriggerCharacter = null)
    {
        $this->firstTriggerCharacter = $firstTriggerCharacter;
        $this->moreTriggerCharacter = $moreTriggerCharacter;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}