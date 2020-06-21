<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class TextDocumentSyncOptions
{
    /**
     * Open and close notifications are sent to the server. If omitted open close notification should not
     * be sent.
     *
     * @var bool|null
     */
    public $openClose;

    /**
     * Change notifications are sent to the server. See TextDocumentSyncKind.None, TextDocumentSyncKind.Full
     * and TextDocumentSyncKind.Incremental. If omitted it defaults to TextDocumentSyncKind.None.
     *
     * @var 0|1|2|null
     */
    public $change;

    /**
     * If present will save notifications are sent to the server. If omitted the notification should not be
     * sent.
     *
     * @var bool|null
     */
    public $willSave;

    /**
     * If present will save wait until requests are sent to the server. If omitted the request should not be
     * sent.
     *
     * @var bool|null
     */
    public $willSaveWaitUntil;

    /**
     * If present save notifications are sent to the server. If omitted the notification should not be
     * sent.
     *
     * @var SaveOptions|null
     */
    public $save;

    /**
     * @param bool|null $openClose
     * @param 0|1|2|null $change
     * @param bool|null $willSave
     * @param bool|null $willSaveWaitUntil
     * @param SaveOptions|null $save
     */
    public function __construct(?bool $openClose = null, $change = null, ?bool $willSave = null, ?bool $willSaveWaitUntil = null, ?SaveOptions $save = null)
    {
        $this->openClose = $openClose;
        $this->change = $change;
        $this->willSave = $willSave;
        $this->willSaveWaitUntil = $willSaveWaitUntil;
        $this->save = $save;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'openClose' => ['names' => [], 'iterable' => false],
            'change' => ['names' => [], 'iterable' => false],
            'willSave' => ['names' => [], 'iterable' => false],
            'willSaveWaitUntil' => ['names' => [], 'iterable' => false],
            'save' => ['names' => [SaveOptions::class], 'iterable' => false],
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