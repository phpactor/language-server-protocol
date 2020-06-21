<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters send in a save text document notification
 */
class DidSaveTextDocumentParams
{
    /**
     * The document that was closed.
     *
     * @var VersionedTextDocumentIdentifier
     */
    public $textDocument;

    /**
     * Optional the content when saved. Depends on the includeText value
     * when the save notification was requested.
     *
     * @var string|null
     */
    public $text;

    /**
     * @param VersionedTextDocumentIdentifier $textDocument
     * @param string|null $text
     */
    public function __construct(VersionedTextDocumentIdentifier $textDocument, ?string $text = null)
    {
        $this->textDocument = $textDocument;
        $this->text = $text;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [VersionedTextDocumentIdentifier::class],
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