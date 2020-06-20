<?php

namespace LanguageServerProtocol;

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
    public function __construct(?bool $overwrite, ?bool $ignoreIfExists)
    {
        $this->overwrite = $overwrite;
        $this->ignoreIfExists = $ignoreIfExists;
    }
}