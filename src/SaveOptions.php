<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Save options.
 */
class SaveOptions
{
    /**
     * The client is supposed to include the content on save.
     *
     * @var bool|null
     */
    public $includeText;

    /**
     * @param bool|null $includeText
     */
    public function __construct(?bool $includeText = null)
    {
        $this->includeText = $includeText;
    }
}