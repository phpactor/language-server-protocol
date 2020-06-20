<?php

namespace LanguageServerProtocol;

/**
 * Represents a related message and source code location for a diagnostic. This should be
 * used to point to code locations that cause or related to a diagnostics, e.g when duplicating
 * a symbol in a scope.
 */
class DiagnosticRelatedInformation
{
    /**
     * The location of this related diagnostic information.
     *
     * @var Location
     */
    public $location;

    /**
     * The message of this related diagnostic information.
     *
     * @var string
     */
    public $message;

    /**
     * @param Location $location
     * @param string $message
     */
    public function __construct(string $message, Location $location)
    {
        $this->location = $location;
        $this->message = $message;
    }
}