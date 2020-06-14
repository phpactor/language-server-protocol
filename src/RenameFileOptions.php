<?php

namespace LanguageServerProtocol;

class RenameFileOptions
{
    /**
     * Overwrite target if existing. Overwrite wins over `ignoreIfExists`
     *
     * @var string|null
     */
    public $overwrite;

    /**
     * Ignores if target exists.
     *
     * @var string|null
     */
    public $ignoreIfExists;

    /**
     * @param string|null $overwrite
     * @param string|null $ignoreIfExists
     */
    public function __construct(?string $overwrite, ?string $ignoreIfExists)
    {
        $this->overwrite = $overwrite;
        $this->ignoreIfExists = $ignoreIfExists;
    }
}