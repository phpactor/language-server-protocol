<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Rename file options
 */
class RenameFileOptions
{
    /**
     * Overwrite target if existing. Overwrite wins over `ignoreIfExists`
     *
     * @var bool|null
     */
    public $overwrite;

    /**
     * Ignores if target exists.
     *
     * @var bool|null
     */
    public $ignoreIfExists;

    /**
     * @param bool|null $overwrite
     * @param bool|null $ignoreIfExists
     */
    public function __construct(?bool $overwrite = null, ?bool $ignoreIfExists = null)
    {
        $this->overwrite = $overwrite;
        $this->ignoreIfExists = $ignoreIfExists;
    }
}