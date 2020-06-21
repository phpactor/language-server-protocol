<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters of a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class DocumentRangeFormattingParams
{
    /**
     * The document to format.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The range to format
     *
     * @var Range
     */
    public $range;

    /**
     * The format options
     *
     * @var FormattingOptions
     */
    public $options;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Range $range
     * @param FormattingOptions $options
     * @param int|string|null $workDoneToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, Range $range, FormattingOptions $options, $workDoneToken = null)
    {
        $this->textDocument = $textDocument;
        $this->range = $range;
        $this->options = $options;
        $this->workDoneToken = $workDoneToken;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [TextDocumentIdentifier::class],
            'range' => [Range::class],
            'options' => [FormattingOptions::class],
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