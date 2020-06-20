<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

/**
 * Represents a location inside a resource, such as a line
 * inside a text file.
 */
class Location
{
    /**
     *
     * @var string
     */
    public $uri;

    /**
     *
     * @var Range
     */
    public $range;

    /**
     * @param string $uri
     * @param Range $range
     */
    public function __construct(string $uri, Range $range)
    {
        $this->uri = $uri;
        $this->range = $range;
    }
}