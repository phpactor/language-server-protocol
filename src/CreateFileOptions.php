<?php

namespace LanguageServerProtocol;

/**
 * Options to create a file.
 */
class CreateFileOptions
{
    /**
     * Overwrite existing file. Overwrite wins over `ignoreIfExists`
     *
     * @var bool|null
     */
    public $overwrite;

    /**
     * Ignore if exists.
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