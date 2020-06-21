<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The workspace folder change event.
 */
class WorkspaceFoldersChangeEvent
{
    /**
     * The array of added workspace folders
     *
     * @var array<WorkspaceFolder>
     */
    public $added;

    /**
     * The array of the removed workspace folders
     *
     * @var array<WorkspaceFolder>
     */
    public $removed;

    /**
     * @param array<WorkspaceFolder> $added
     * @param array<WorkspaceFolder> $removed
     */
    public function __construct(array $added, array $removed)
    {
        $this->added = $added;
        $this->removed = $removed;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'added' => ['names' => [WorkspaceFolder::class], 'iterable' => true],
            'removed' => ['names' => [WorkspaceFolder::class], 'iterable' => true],
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