<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class InlayHint
{
    /**
     * The position of this hint.
     *
     * @var Position
     */
    public $position;

    /**
     * The label of this hint. A human readable string or an array of
     * InlayHintLabelPart label parts.
     * 
     * *Note* that neither the string nor the label part can be empty.
     *
     * @var string|array<array{value:string,tooltip:string|MarkupContent,location:Location,command:Command}>
     */
    public $label;

    /**
     * The kind of this hint. Can be omitted in which case the client
     * should fall back to a reasonable default.
     *
     * @var InlayHintKind::*|null
     */
    public $kind;

    /**
     * Optional text edits that are performed when accepting this inlay hint.
     * 
     * *Note* that edits are expected to change the document so that the inlay
     * hint (or its nearest variant) is now part of the document and the inlay
     * hint itself is now obsolete.
     *
     * @var array<TextEdit>|null
     */
    public $textEdits;

    /**
     * The tooltip text when you hover over this item.
     *
     * @var string|MarkupContent|null
     */
    public $tooltip;

    /**
     * Render padding before the hint.
     * 
     * Note: Padding should use the editor's background color, not the
     * background color of the hint itself. That means padding can be used
     * to visually align/separate an inlay hint.
     *
     * @var bool|null
     */
    public $paddingLeft;

    /**
     * Render padding after the hint.
     * 
     * Note: Padding should use the editor's background color, not the
     * background color of the hint itself. That means padding can be used
     * to visually align/separate an inlay hint.
     *
     * @var bool|null
     */
    public $paddingRight;

    /**
     * A data entry field that is preserved on an inlay hint between
     * a `textDocument/inlayHint` and a `inlayHint/resolve` request.
     *
     * @var mixed|null
     */
    public $data;

    /**
     * @param Position $position
     * @param string|array<array{value:string,tooltip:string|MarkupContent,location:Location,command:Command}> $label
     * @param InlayHintKind::*|null $kind
     * @param array<TextEdit>|null $textEdits
     * @param string|MarkupContent|null $tooltip
     * @param bool|null $paddingLeft
     * @param bool|null $paddingRight
     * @param mixed|null $data
     */
    public function __construct(Position $position, $label, $kind = null, ?array $textEdits = null, $tooltip = null, ?bool $paddingLeft = null, ?bool $paddingRight = null, $data = null)
    {
        $this->position = $position;
        $this->label = $label;
        $this->kind = $kind;
        $this->textEdits = $textEdits;
        $this->tooltip = $tooltip;
        $this->paddingLeft = $paddingLeft;
        $this->paddingRight = $paddingRight;
        $this->data = $data;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'position' => ['names' => [Position::class], 'iterable' => false],
            'label' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'textEdits' => ['names' => [TextEdit::class], 'iterable' => true],
            'tooltip' => ['names' => [MarkupContent::class], 'iterable' => false],
            'paddingLeft' => ['names' => [], 'iterable' => false],
            'paddingRight' => ['names' => [], 'iterable' => false],
            'data' => ['names' => [], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            // from here we only care about arrays that can be transformed into
            // objects
            if (!is_array($value)) {
                continue;
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        
}