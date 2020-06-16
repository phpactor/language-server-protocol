<?php

namespace LanguageServerProtocol;

class DocumentLink
{
    /**
     * The range this link applies to.
     *
     * @var Range
     */
    public $range;

    /**
     * The uri this link points to.
     *
     * @var string|null
     */
    public $target;

    /**
     * The tooltip text when you hover over this link.
     * 
     * If a tooltip is provided, is will be displayed in a string that includes instructions on how to
     * trigger the link, such as `{0} (ctrl + click)`. The specific instructions vary depending on OS,
     * user settings, and localization.
     *
     * @var string|null
     */
    public $tooltip;

    /**
     * A data entry field that is preserved on a document link between a
     * DocumentLinkRequest and a DocumentLinkResolveRequest.
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param Range $range
     * @param string|null $target
     * @param string|null $tooltip
     * @param mixed|null $data
     */
    public function __construct(Range $range, ?string $target, ?string $tooltip, ?$data)
    {
        $this->range = $range;
        $this->target = $target;
        $this->tooltip = $tooltip;
        $this->data = $data;
    }
}