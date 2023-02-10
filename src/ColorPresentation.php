<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class ColorPresentation
{
    /**
     * The label of this color presentation. It will be shown on the color
     * picker header. By default this is also the text that is inserted when selecting
     * this color presentation.
     *
     * @var string
     */
    public $label;

    /**
     * An [edit](#TextEdit) which is applied to a document when selecting
     * this presentation for the color.  When `falsy` the [label](#ColorPresentation.label)
     * is used.
     *
     * @var TextEdit|null
     */
    public $textEdit;

    /**
     * An optional array of additional [text edits](#TextEdit) that are applied when
     * selecting this color presentation. Edits must not overlap with the main [edit](#ColorPresentation.textEdit) nor with themselves.
     *
     * @var array<TextEdit>|null
     */
    public $additionalTextEdits;

    /**
     * @param string $label
     * @param TextEdit|null $textEdit
     * @param array<TextEdit>|null $additionalTextEdits
     */
    public function __construct(string $label, ?TextEdit $textEdit = null, ?array $additionalTextEdits = null)
    {
        $this->label = $label;
        $this->textEdit = $textEdit;
        $this->additionalTextEdits = $additionalTextEdits;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'label' => ['names' => [], 'iterable' => false],
            'textEdit' => ['names' => [TextEdit::class], 'iterable' => false],
            'additionalTextEdits' => ['names' => [TextEdit::class], 'iterable' => true],
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