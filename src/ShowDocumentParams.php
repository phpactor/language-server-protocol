<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Params to show a document.
 */
class ShowDocumentParams
{
    /**
     * The document uri to show.
     *
     * @var string
     */
    public $uri;

    /**
     * Indicates to show the resource in an external program.
     * To show for example `https://code.visualstudio.com/`
     * in the default WEB browser set `external` to `true`.
     *
     * @var bool|null
     */
    public $external;

    /**
     * An optional property to indicate whether the editor
     * showing the document should take focus or not.
     * Clients might ignore this property if an external
     * program in started.
     *
     * @var bool|null
     */
    public $takeFocus;

    /**
     * An optional selection range if the document is a text
     * document. Clients might ignore the property if an
     * external program is started or the file is not a text
     * file.
     *
     * @var Range|null
     */
    public $selection;

    /**
     * @param string $uri
     * @param bool|null $external
     * @param bool|null $takeFocus
     * @param Range|null $selection
     */
    public function __construct(string $uri, ?bool $external = null, ?bool $takeFocus = null, ?Range $selection = null)
    {
        $this->uri = $uri;
        $this->external = $external;
        $this->takeFocus = $takeFocus;
        $this->selection = $selection;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'uri' => ['names' => [], 'iterable' => false],
            'external' => ['names' => [], 'iterable' => false],
            'takeFocus' => ['names' => [], 'iterable' => false],
            'selection' => ['names' => [Range::class], 'iterable' => false],
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