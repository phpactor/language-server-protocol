<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Registration options for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SignatureHelpOptions
 */
class SignatureHelpRegistrationOptions
{
    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * List of characters that trigger signature help.
     *
     * @var array<string>|null
     */
    public $triggerCharacters;

    /**
     * List of characters that re-trigger signature help.
     * 
     * These trigger characters are only active when signature help is already showing. All trigger characters
     * are also counted as re-trigger characters.
     *
     * @var array<string>|null
     */
    public $retriggerCharacters;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param array<string>|null $triggerCharacters
     * @param array<string>|null $retriggerCharacters
     * @param bool|null $workDoneProgress
     */
    public function __construct($documentSelector = null, ?array $triggerCharacters = null, ?array $retriggerCharacters = null, ?bool $workDoneProgress = null)
    {
        $this->documentSelector = $documentSelector;
        $this->triggerCharacters = $triggerCharacters;
        $this->retriggerCharacters = $retriggerCharacters;
        $this->workDoneProgress = $workDoneProgress;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'documentSelector' => [DocumentSelector::class],
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