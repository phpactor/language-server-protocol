<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class RenameClientCapabilities
{
    /**
     * Whether rename supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Client supports testing for validity of rename operations
     * before execution.
     *
     * @var bool|null
     */
    public $prepareSupport;

    /**
     * Client supports the default behavior result.
     * 
     * The value indicates the default behavior used by the
     * client.
     *
     * @var PrepareSupportDefaultBehavior::*|null
     */
    public $prepareSupportDefaultBehavior;

    /**
     * Whether th client honors the change annotations in
     * text edits and resource operations returned via the
     * rename request's workspace edit by for example presenting
     * the workspace edit in the user interface and asking
     * for confirmation.
     *
     * @var bool|null
     */
    public $honorsChangeAnnotations;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $prepareSupport
     * @param PrepareSupportDefaultBehavior::*|null $prepareSupportDefaultBehavior
     * @param bool|null $honorsChangeAnnotations
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $prepareSupport = null, $prepareSupportDefaultBehavior = null, ?bool $honorsChangeAnnotations = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->prepareSupport = $prepareSupport;
        $this->prepareSupportDefaultBehavior = $prepareSupportDefaultBehavior;
        $this->honorsChangeAnnotations = $honorsChangeAnnotations;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'prepareSupport' => ['names' => [], 'iterable' => false],
            'prepareSupportDefaultBehavior' => ['names' => [], 'iterable' => false],
            'honorsChangeAnnotations' => ['names' => [], 'iterable' => false],
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