<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * A document link is a range in a text document that links to an internal or external resource, like another
 * text document or a web site.
 */
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
    public function __construct(Range $range, ?string $target = null, ?string $tooltip = null, $data = null)
    {
        $this->range = $range;
        $this->target = $target;
        $this->tooltip = $tooltip;
        $this->data = $data;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'range' => ['names' => [Range::class], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $exception;
    }
        
}