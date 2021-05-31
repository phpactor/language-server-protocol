<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Mixins (implemented TS interfaces): _ClientCapabilities, WorkspaceFoldersClientCapabilities, ConfigurationClientCapabilities, WorkDoneProgressClientCapabilities
 */
class ClientCapabilities
{
    /**
     * The workspace client capabilities
     *
     * @var array<mixed>|null
     */
    public $workspace;

    /**
     * Text document specific client capabilities.
     *
     * @var TextDocumentClientCapabilities|null
     */
    public $textDocument;

    /**
     * Window specific client capabilities.
     *
     * @var array<mixed>|null
     */
    public $window;

    /**
     * General client capabilities.
     *
     * @var GeneralClientCapabilities|null
     */
    public $general;

    /**
     * Experimental client capabilities.
     *
     * @var array<mixed>|null
     */
    public $experimental;

    /**
     * @param array<mixed>|null $workspace
     * @param TextDocumentClientCapabilities|null $textDocument
     * @param array<mixed>|null $window
     * @param GeneralClientCapabilities|null $general
     * @param array<mixed>|null $experimental
     */
    public function __construct(?array $workspace = null, ?TextDocumentClientCapabilities $textDocument = null, ?array $window = null, ?GeneralClientCapabilities $general = null, ?array $experimental = null)
    {
        $this->workspace = $workspace;
        $this->textDocument = $textDocument;
        $this->window = $window;
        $this->general = $general;
        $this->experimental = $experimental;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'workspace' => ['names' => [], 'iterable' => false],
            'textDocument' => ['names' => [TextDocumentClientCapabilities::class], 'iterable' => false],
            'window' => ['names' => [], 'iterable' => false],
            'general' => ['names' => [GeneralClientCapabilities::class], 'iterable' => false],
            'experimental' => ['names' => [], 'iterable' => false],
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