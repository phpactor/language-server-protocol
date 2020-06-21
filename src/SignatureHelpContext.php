<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Additional information about the context in which a signature help request was triggered.
 */
class SignatureHelpContext
{
    /**
     * Action that caused signature help to be triggered.
     *
     * @var 1|2|3
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
     * Retriggers occur when the signature help is already active and can be caused by actions such as
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
     * @param 1|2|3 $triggerKind
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
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'activeSignatureHelp' => ['names' => [SignatureHelp::class], 'iterable' => false],
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