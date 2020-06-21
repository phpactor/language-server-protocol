<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Mixins (implemented TS interfaces): _ClientCapabilities, WorkspaceFoldersClientCapabilities, ConfigurationClientCapabilities, WorkDoneProgressClientCapabilities
 */
class ClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities|null
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>|null
     */
    public $window;

    /**
     * Experimental client capabilities.
     *
     * @var object|null
     */
    public $experimental;

    /**
     * @param array<mixed>|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param array<mixed>|null $window
     * @param object|null $experimental
     */
    public function __construct(?array $workspace = null, ?TextDocumentClientCapabilities $textDocument = null, ?array $window = null, ?object $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->experimental = $experimental;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [TextDocumentClientCapabilities::class],
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