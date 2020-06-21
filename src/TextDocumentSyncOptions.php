<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

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
    public static function fromArray(array $array): self
    {
        $map = [
            'save' => ['names' => [SaveOptions::class], 'iterable' => false],
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
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object]);
            } catch (Exception $e) {
                continue;
            }
        }

        return null;
    }
        
}