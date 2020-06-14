<?php

namespace LanguageServerProtocol;

class LocationLink
{
    /**
     * Span of the origin of this link.
     * 
     * Used as the underlined span for mouse definition hover. Defaults to the word range at
     * the definition position.
     *
     * @var Range
     */
    public $originSelectionRange;

    /**
     * The target resource identifier of this link.
     *
     * @var DocumentUri
     */
    public $targetUri;

    /**
     * The full target range of this link. If the target for example is a symbol then target range is the
     * range enclosing this symbol not including leading/trailing whitespace but everything else
     * like comments. This information is typically used to highlight the range in the editor.
     *
     * @var Range
     */
    public $targetRange;

    /**
     * The range that should be selected and revealed when this link is being followed, e.g the name of a function.
     * Must be contained by the the `targetRange`. See also `DocumentSymbol#range`
     *
     * @var Range
     */
    public $targetSelectionRange;

    public function __construct(Range $originSelectionRange, DocumentUri $targetUri, Range $targetRange, Range $targetSelectionRange)
    {
        $this->originSelectionRange = $originSelectionRange;
        $this->targetUri = $targetUri;
        $this->targetRange = $targetRange;
        $this->targetSelectionRange = $targetSelectionRange;
    }
}