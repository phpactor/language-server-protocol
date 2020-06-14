<?php

namespace LanguageServerProtocol;

class RenameFileOptions
{
    /**
     * Overwrite target if existing. Overwrite wins over `ignoreIfExists`
     *
     * @var string
     */
    public $overwrite;

    /**
     * Ignores if target exists.
     *
     * @var string
     */
    public $ignoreIfExists;

    public function __construct(string $overwrite, string $ignoreIfExists)
    {
        $this->$overwrite = $this->$overwrite;
        $this->$ignoreIfExists = $this->$ignoreIfExists;
    }
}