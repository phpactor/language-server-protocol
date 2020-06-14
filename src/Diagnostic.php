<?php

namespace LanguageServerProtocol;

class Diagnostic
{
    /**
     * The range at which the message applies
     *
     * @var Range
     */
    public $range;

    /**
     * The diagnostic's severity. Can be omitted. If omitted it is up to the
     * client to interpret diagnostics as error, warning, info or hint.
     *
     * @var 1|2|3|4
     */
    public $severity;

    /**
     * The diagnostic's code, which usually appear in the user interface.
     *
     * @var int|string
     */
    public $code;

    /**
     * A human-readable string describing the source of this
     * diagnostic, e.g. 'typescript' or 'super lint'. It usually
     * appears in the user interface.
     *
     * @var string
     */
    public $source;

    /**
     * The diagnostic's message. It usually appears in the user interface
     *
     * @var string
     */
    public $message;

    /**
     * Additional metadata about the diagnostic.
     *
     * @var array<1|2>
     */
    public $tags;

    /**
     * An array of related diagnostic information, e.g. when symbol-names within
     * a scope collide all definitions can be marked via this property.
     *
     * @var array<DiagnosticRelatedInformation>
     */
    public $relatedInformation;

    public function __construct(Range $range, null $severity, null $code, string $source, string $message, array $tags, array $relatedInformation)
    {
        $this->range = $range;
        $this->severity = $severity;
        $this->code = $code;
        $this->source = $source;
        $this->message = $message;
        $this->tags = $tags;
        $this->relatedInformation = $relatedInformation;
    }
}