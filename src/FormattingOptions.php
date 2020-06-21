<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Value-object describing what options formatting should use.
 */
class FormattingOptions
{
    /**
     * Size of a tab in spaces.
     *
     * @var int
     */
    public $tabSize;

    /**
     * Prefer spaces over tabs.
     *
     * @var bool
     */
    public $insertSpaces;

    /**
     * Trim trailing whitespaces on a line.
     *
     * @var bool|null
     */
    public $trimTrailingWhitespace;

    /**
     * Insert a newline character at the end of the file if one does not exist.
     *
     * @var bool|null
     */
    public $insertFinalNewline;

    /**
     * Trim all newlines after the final newline at the end of the file.
     *
     * @var bool|null
     */
    public $trimFinalNewlines;

    /**
     * @param int $tabSize
     * @param bool $insertSpaces
     * @param bool|null $trimTrailingWhitespace
     * @param bool|null $insertFinalNewline
     * @param bool|null $trimFinalNewlines
     */
    public function __construct(int $tabSize, bool $insertSpaces, ?bool $trimTrailingWhitespace = null, ?bool $insertFinalNewline = null, ?bool $trimFinalNewlines = null)
    {
        $this->tabSize = $tabSize;
        $this->insertSpaces = $insertSpaces;
        $this->trimTrailingWhitespace = $trimTrailingWhitespace;
        $this->insertFinalNewline = $insertFinalNewline;
        $this->trimFinalNewlines = $trimFinalNewlines;
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