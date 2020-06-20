<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

class MessageActionItem
{
    /**
     * A short title like 'Retry', 'Open Log' etc.
     *
     * @var string
     */
    public $title;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}