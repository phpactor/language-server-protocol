<?php

namespace LanguageServerProtocol;

class CreateFileOptions
{
    /**
     * Overwrite existing file. Overwrite wins over `ignoreIfExists`
     *
     * @var string|null
     */
    public $overwrite;

    /**
     * Ignore if exists.
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