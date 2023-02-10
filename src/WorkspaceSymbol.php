<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * A special workspace symbol that supports locations without a range.
 * 
 * See also SymbolInformation.
 *
 * Mixins (implemented TS interfaces): BaseSymbolInformation
 */
class WorkspaceSymbol extends BaseSymbolInformation
{
    /**
     * The location of the symbol. Whether a server is allowed to
     * return a location without a range depends on the client
     * capability `workspace.symbol.resolveSupport`.
     * 
     * See SymbolInformation#location for more details.
     *
     * @var Location|array<mixed>
     */
    public $location;

    /**
     * A data entry field that is preserved on a workspace symbol between a
     * workspace symbol request and a workspace symbol resolve request.
     *
     * @var mixed|null
     */
    public $data;

    /**
     * The name of this symbol.
     *
     * @var string
     */
    public $name;

    /**
     * The kind of this symbol.
     *
     * @var SymbolKind::*
     */
    public $kind;

    /**
     * Tags for this symbol.
     *
     * @var array<SymbolTag::*>|null
     */
    public $tags;

    /**
     * The name of the symbol containing this symbol. This information is for
     * user interface purposes (e.g. to render a qualifier in the user interface
     * if necessary). It can't be used to re-infer a hierarchy for the document
     * symbols.
     *
     * @var string|null
     */
    public $containerName;

    /**
     * @param Location|array<mixed> $location
     * @param mixed|null $data
     * @param string $name
     * @param SymbolKind::* $kind
     * @param array<SymbolTag::*>|null $tags
     * @param string|null $containerName
     */
    public function __construct($location, string $name, $kind, $data = null, ?array $tags = null, ?string $containerName = null)
    {
        $this->location = $location;
        $this->data = $data;
        $this->name = $name;
        $this->kind = $kind;
        $this->tags = $tags;
        $this->containerName = $containerName;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'location' => ['names' => [Location::class], 'iterable' => false],
            'data' => ['names' => [], 'iterable' => false],
            'name' => ['names' => [], 'iterable' => false],
            'kind' => ['names' => [], 'iterable' => false],
            'tags' => ['names' => [], 'iterable' => true],
            'containerName' => ['names' => [], 'iterable' => false],
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