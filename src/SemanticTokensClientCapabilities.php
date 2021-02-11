<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 */
class SemanticTokensClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration. If this is set to `true`
     * the client supports the new `(TextDocumentRegistrationOptions & StaticRegistrationOptions)`
     * return value for the corresponding server capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Which requests the client supports and might send to the server
     * depending on the server's capability. Please note that clients might not
     * show semantic tokens or degrade some of the user experience if a range
     * or full request is advertised by the client but not provided by the
     * server. If for example the client capability `requests.full` and
     * `request.range` are both set to true but the server only provides a
     * range provider the client might not render a minimap correctly or might
     * even decide to not show any semantic tokens at all.
     *
     * @var array<mixed>
     */
    public $requests;

    /**
     * The token types that the client supports.
     *
     * @var array<string>
     */
    public $tokenTypes;

    /**
     * The token modifiers that the client supports.
     *
     * @var array<string>
     */
    public $tokenModifiers;

    /**
     * The token formats the clients supports.
     *
     * @var array<TokenFormat::*>
     */
    public $formats;

    /**
     * Whether the client supports tokens that can overlap each other.
     *
     * @var bool|null
     */
    public $overlappingTokenSupport;

    /**
     * Whether the client supports tokens that can span multiple lines.
     *
     * @var bool|null
     */
    public $multilineTokenSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param array<mixed> $requests
     * @param array<string> $tokenTypes
     * @param array<string> $tokenModifiers
     * @param array<TokenFormat::*> $formats
     * @param bool|null $overlappingTokenSupport
     * @param bool|null $multilineTokenSupport
     */
    public function __construct(array $requests, array $tokenTypes, array $tokenModifiers, array $formats, ?bool $dynamicRegistration = null, ?bool $overlappingTokenSupport = null, ?bool $multilineTokenSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->requests = $requests;
        $this->tokenTypes = $tokenTypes;
        $this->tokenModifiers = $tokenModifiers;
        $this->formats = $formats;
        $this->overlappingTokenSupport = $overlappingTokenSupport;
        $this->multilineTokenSupport = $multilineTokenSupport;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'requests' => ['names' => [], 'iterable' => false],
            'tokenTypes' => ['names' => [], 'iterable' => true],
            'tokenModifiers' => ['names' => [], 'iterable' => true],
            'formats' => ['names' => [], 'iterable' => true],
            'overlappingTokenSupport' => ['names' => [], 'iterable' => false],
            'multilineTokenSupport' => ['names' => [], 'iterable' => false],
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