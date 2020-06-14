<?php

namespace LanguageServerProtocol;

class CreateFileOptions
{
    /**
     * Overwrite existing file. Overwrite wins over `ignoreIfExists`
     *
     * @var string
     */
    public $overwrite;

    /**
     * Ignore if exists.
     *
     * @var string
     */
    public $ignoreIfExists;

    /**
     * @param string $overwrite
     * @param string $ignoreIfExists
     */
    public function __construct(string $overwrite, string $ignoreIfExists)
    {
        $this->overwrite = $overwrite;
        $this->ignoreIfExists = $ignoreIfExists;
    }
}