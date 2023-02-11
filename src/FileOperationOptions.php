<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Options for notifications/requests for user operations on files.
 */
class FileOperationOptions
{
    /**
     * The server is interested in receiving didCreateFiles notifications.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $didCreate;

    /**
     * The server is interested in receiving willCreateFiles requests.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $willCreate;

    /**
     * The server is interested in receiving didRenameFiles notifications.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $didRename;

    /**
     * The server is interested in receiving willRenameFiles requests.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $willRename;

    /**
     * The server is interested in receiving didDeleteFiles file notifications.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $didDelete;

    /**
     * The server is interested in receiving willDeleteFiles file requests.
     *
     * @var FileOperationRegistrationOptions|null
     */
    public $willDelete;

    /**
     * @param FileOperationRegistrationOptions|null $didCreate
     * @param FileOperationRegistrationOptions|null $willCreate
     * @param FileOperationRegistrationOptions|null $didRename
     * @param FileOperationRegistrationOptions|null $willRename
     * @param FileOperationRegistrationOptions|null $didDelete
     * @param FileOperationRegistrationOptions|null $willDelete
     */
    public function __construct(?FileOperationRegistrationOptions $didCreate = null, ?FileOperationRegistrationOptions $willCreate = null, ?FileOperationRegistrationOptions $didRename = null, ?FileOperationRegistrationOptions $willRename = null, ?FileOperationRegistrationOptions $didDelete = null, ?FileOperationRegistrationOptions $willDelete = null)
    {
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
            'didCreate' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
            'willCreate' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
            'didRename' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
            'willRename' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
            'didDelete' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
            'willDelete' => ['names' => [FileOperationRegistrationOptions::class], 'iterable' => false],
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