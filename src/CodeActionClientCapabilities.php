<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * The Client Capabilities of a [CodeActionRequest](#CodeActionRequest).
 */
class CodeActionClientCapabilities
{
    /**
     * Whether code action supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The client support code action literals of type `CodeAction` as a valid
     * response of the `textDocument/codeAction` request. If the property is not
     * set the request can only return `Command` literals.
     *
     * @var array{codeActionKind:array{valueSet:array<CodeActionKind::*>}}|null
     */
    public $codeActionLiteralSupport;

    /**
     * Whether code action supports the `isPreferred` property.
     *
     * @var bool|null
     */
    public $isPreferredSupport;

    /**
     * Whether code action supports the `disabled` property.
     *
     * @var bool|null
     */
    public $disabledSupport;

    /**
     * Whether code action supports the `data` property which is
     * preserved between a `textDocument/codeAction` and a
     * `codeAction/resolve` request.
     *
     * @var bool|null
     */
    public $dataSupport;

    /**
     * Whether the client supports resolving additional code action
     * properties via a separate `codeAction/resolve` request.
     *
     * @var array{properties:array<string>}|null
     */
    public $resolveSupport;

    /**
     * Whether the client honors the change annotations in
     * text edits and resource operations returned via the
     * `CodeAction#edit` property by for example presenting
     * the workspace edit in the user interface and asking
     * for confirmation.
     *
     * @var bool|null
     */
    public $honorsChangeAnnotations;

    /**
     * @param bool|null $dynamicRegistration
     * @param array{codeActionKind:array{valueSet:array<CodeActionKind::*>}}|null $codeActionLiteralSupport
     * @param bool|null $isPreferredSupport
     * @param bool|null $disabledSupport
     * @param bool|null $dataSupport
     * @param array{properties:array<string>}|null $resolveSupport
     * @param bool|null $honorsChangeAnnotations
     */
    public function __construct(?bool $dynamicRegistration = null, ?array $codeActionLiteralSupport = null, ?bool $isPreferredSupport = null, ?bool $disabledSupport = null, ?bool $dataSupport = null, ?array $resolveSupport = null, ?bool $honorsChangeAnnotations = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->codeActionLiteralSupport = $codeActionLiteralSupport;
        $this->isPreferredSupport = $isPreferredSupport;
        $this->disabledSupport = $disabledSupport;
        $this->dataSupport = $dataSupport;
        $this->resolveSupport = $resolveSupport;
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
            'codeActionLiteralSupport' => ['names' => [], 'iterable' => false],
            'isPreferredSupport' => ['names' => [], 'iterable' => false],
            'disabledSupport' => ['names' => [], 'iterable' => false],
            'dataSupport' => ['names' => [], 'iterable' => false],
            'resolveSupport' => ['names' => [], 'iterable' => false],
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