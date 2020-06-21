<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters send in a close text document notification
 */
class DidCloseTextDocumentParams
{
    /**
     * The document that was closed.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * @param TextDocumentIdentifier $textDocument
     */
    public function __construct(TextDocumentIdentifier $textDocument)
    {
        $this->textDocument = $textDocument;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [TextDocumentIdentifier::class],
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