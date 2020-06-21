<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * Parameters for a [HoverRequest](#HoverRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams
 */
class HoverParams
{
    /**
     * The text document.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The position inside the text document.
     *
     * @var Position
     */
    public $position;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param Position $position
     * @param int|string|null $workDoneToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, Position $position, $workDoneToken = null)
    {
        $this->textDocument = $textDocument;
        $this->position = $position;
        $this->workDoneToken = $workDoneToken;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'textDocument' => ['names' => [TextDocumentIdentifier::class], 'iterable' => false],
            'position' => ['names' => [Position::class], 'iterable' => false],
            'workDoneToken' => ['names' => [], 'iterable' => false],
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