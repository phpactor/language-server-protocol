<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Capabilities relating to events from file operations by the user in the client.
 * 
 * These events do not come from the file system, they come from user operations
 * like renaming a file in the UI.
 */
class FileOperationClientCapabilities
{
    /**
     * Whether the client supports dynamic registration for file requests/notifications.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client has support for sending didCreateFiles notifications.
     *
     * @var bool|null
     */
    public $didCreate;

    /**
     * The client has support for sending willCreateFiles requests.
     *
     * @var bool|null
     */
    public $willCreate;

    /**
     * The client has support for sending didRenameFiles notifications.
     *
     * @var bool|null
     */
    public $didRename;

    /**
     * The client has support for sending willRenameFiles requests.
     *
     * @var bool|null
     */
    public $willRename;

    /**
     * The client has support for sending didDeleteFiles notifications.
     *
     * @var bool|null
     */
    public $didDelete;

    /**
     * The client has support for sending willDeleteFiles requests.
     *
     * @var bool|null
     */
    public $willDelete;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $didCreate
     * @param bool|null $willCreate
     * @param bool|null $didRename
     * @param bool|null $willRename
     * @param bool|null $didDelete
     * @param bool|null $willDelete
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $didCreate = null, ?bool $willCreate = null, ?bool $didRename = null, ?bool $willRename = null, ?bool $didDelete = null, ?bool $willDelete = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->didCreate = $didCreate;
        $this->willCreate = $willCreate;
        $this->didRename = $didRename;
        $this->willRename = $willRename;
        $this->didDelete = $didDelete;
        $this->willDelete = $willDelete;
    }

    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'didCreate' => ['names' => [], 'iterable' => false],
            'willCreate' => ['names' => [], 'iterable' => false],
            'didRename' => ['names' => [], 'iterable' => false],
            'willRename' => ['names' => [], 'iterable' => false],
            'didDelete' => ['names' => [], 'iterable' => false],
            'willDelete' => ['names' => [], 'iterable' => false],
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