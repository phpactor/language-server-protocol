<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Represents a diagnostic, such as a compiler error or warning. Diagnostic objects
 * are only valid in the scope of a resource.
 */
class Diagnostic
{
    /**
     * The range at which the message applies
     *
     * @var Range
     */
    public $range;

    /**
     * The diagnostic's severity. Can be omitted. If omitted it is up to the
     * client to interpret diagnostics as error, warning, info or hint.
     *
     * @var 1|2|3|4|null
     */
    public $severity;

    /**
     * The diagnostic's code, which usually appear in the user interface.
     *
     * @var int|string|null
     */
    public $code;

    /**
     * A human-readable string describing the source of this
     * diagnostic, e.g. 'typescript' or 'super lint'. It usually
     * appears in the user interface.
     *
     * @var string|null
     */
    public $source;

    /**
     * The diagnostic's message. It usually appears in the user interface
     *
     * @var string
     */
    public $message;

    /**
     * Additional metadata about the diagnostic.
     *
     * @var array<1|2>|null
     */
    public $tags;

    /**
     * An array of related diagnostic information, e.g. when symbol-names within
     * a scope collide all definitions can be marked via this property.
     *
     * @var array<DiagnosticRelatedInformation>|null
     */
    public $relatedInformation;

    /**
     * @param Range $range
     * @param 1|2|3|4|null $severity
     * @param int|string|null $code
     * @param string|null $source
     * @param string $message
     * @param array<1|2>|null $tags
     * @param array<DiagnosticRelatedInformation>|null $relatedInformation
     */
    public function __construct(Range $range, string $message, $severity = null, $code = null, ?string $source = null, ?array $tags = null, ?array $relatedInformation = null)
    {
        $this->range = $range;
        $this->severity = $severity;
        $this->code = $code;
        $this->source = $source;
        $this->message = $message;
        $this->tags = $tags;
        $this->relatedInformation = $relatedInformation;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'range' => ['names' => [Range::class], 'iterable' => false],
            'relatedInformation' => ['names' => [DiagnosticRelatedInformation::class], 'iterable' => true],
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