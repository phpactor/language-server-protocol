<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Mixins (implemented TS interfaces): _InitializeParams, WorkspaceFoldersInitializeParams
 */
class InitializeParams
{
    /**
     * The process Id of the parent process that started
     * the server.
     *
     * @var integer::*|null
     */
    public $processId;

    /**
     * Information about the client
     *
     * @var array<mixed>|null
     */
    public $clientInfo;

    /**
     * The locale the client is currently showing the user interface
     * in. This must not necessarily be the locale of the operating
     * system.
     * 
     * Uses IETF language tags as the value's syntax
     * (See https://en.wikipedia.org/wiki/IETF_language_tag)
     *
     * @var string|null
     */
    public $locale;

    /**
     * The rootPath of the workspace. Is null
     * if no folder is open.
     *
     * @var string|null
     */
    public $rootPath;

    /**
     * The rootUri of the workspace. Is null if no
     * folder is open. If both `rootPath` and `rootUri` are set
     * `rootUri` wins.
     *
     * @var string|null
     */
    public $rootUri;

    /**
     * The capabilities provided by the client (editor or tool)
     *
     * @var ClientCapabilities
     */
    public $capabilities;

    /**
     * User provided initialization options.
     *
     * @var mixed|null
     */
    public $initializationOptions;

    /**
     * The initial trace setting. If omitted trace is disabled ('off').
     *
     * @var 'off'|'messages'|'verbose'|null
     */
    public $trace;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * The actual configured workspace folders.
     *
     * @var array<WorkspaceFolder>|null
     */
    public $workspaceFolders;

    /**
     * @param integer::*|null $processId
     * @param array<mixed>|null $clientInfo
     * @param string|null $locale
     * @param string|null $rootPath
     * @param string|null $rootUri
     * @param ClientCapabilities $capabilities
     * @param mixed|null $initializationOptions
     * @param 'off'|'messages'|'verbose'|null $trace
     * @param int|string|null $workDoneToken
     * @param array<WorkspaceFolder>|null $workspaceFolders
     */
    public function __construct(ClientCapabilities $capabilities, $processId = null, ?array $clientInfo = null, ?string $locale = null, $rootPath = null, $rootUri = null, $initializationOptions = null, $trace = null, $workDoneToken = null, $workspaceFolders = null)
    {
        $this->processId = $processId;
        $this->clientInfo = $clientInfo;
        $this->locale = $locale;
        $this->rootPath = $rootPath;
        $this->rootUri = $rootUri;
        $this->capabilities = $capabilities;
        $this->initializationOptions = $initializationOptions;
        $this->trace = $trace;
        $this->workDoneToken = $workDoneToken;
        $this->workspaceFolders = $workspaceFolders;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'processId' => ['names' => [], 'iterable' => false],
            'clientInfo' => ['names' => [], 'iterable' => false],
            'locale' => ['names' => [], 'iterable' => false],
            'rootPath' => ['names' => [], 'iterable' => false],
            'rootUri' => ['names' => [], 'iterable' => false],
            'capabilities' => ['names' => [ClientCapabilities::class], 'iterable' => false],
            'initializationOptions' => ['names' => [], 'iterable' => false],
            'trace' => ['names' => [], 'iterable' => false],
            'workDoneToken' => ['names' => [], 'iterable' => false],
            'workspaceFolders' => ['names' => [], 'iterable' => false],
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