<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Additional information about the context in which a signature help request was triggered.
 */
class SignatureHelpContext
{
    /**
     * Action that caused signature help to be triggered.
     *
     * @var SignatureHelpTriggerKind::*
     */
    public $triggerKind;

    /**
     * Character that caused signature help to be triggered.
     * 
     * This is undefined when `triggerKind !== SignatureHelpTriggerKind.TriggerCharacter`
     *
     * @var string|null
     */
    public $triggerCharacter;

    /**
     * `true` if signature help was already showing when it was triggered.
     * 
     * Retrigger occurs when the signature help is already active and can be caused by actions such as
     * typing a trigger character, a cursor move, or document content changes.
     *
     * @var bool
     */
    public $isRetrigger;

    /**
     * The currently active `SignatureHelp`.
     * 
     * The `activeSignatureHelp` has its `SignatureHelp.activeSignature` field updated based on
     * the user navigating through available signatures.
     *
     * @var SignatureHelp|null
     */
    public $activeSignatureHelp;

    /**
     * @param SignatureHelpTriggerKind::* $triggerKind
     * @param string|null $triggerCharacter
     * @param bool $isRetrigger
     * @param SignatureHelp|null $activeSignatureHelp
     */
    public function __construct($triggerKind, bool $isRetrigger, ?string $triggerCharacter = null, ?SignatureHelp $activeSignatureHelp = null)
    {
        $this->triggerKind = $triggerKind;
        $this->triggerCharacter = $triggerCharacter;
        $this->isRetrigger = $isRetrigger;
        $this->activeSignatureHelp = $activeSignatureHelp;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'triggerKind' => ['names' => [], 'iterable' => false],
            'triggerCharacter' => ['names' => [], 'iterable' => false],
            'isRetrigger' => ['names' => [], 'iterable' => false],
            'activeSignatureHelp' => ['names' => [SignatureHelp::class], 'iterable' => false],
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