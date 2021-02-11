<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

/**
 * A workspace edit represents changes to many resources managed in the workspace. The edit
 * should either provide `changes` or `documentChanges`. If documentChanges are present
 * they are preferred over `changes` if the client can handle versioned document edits.
 */
class WorkspaceEdit
{
    /**
     * Holds changes to existing resources.
     *
     * @var array<mixed>|null
     */
    public $changes;

    /**
     * Depending on the client capability `workspace.workspaceEdit.resourceOperations` document changes
     * are either an array of `TextDocumentEdit`s to express changes to n different text documents
     * where each text document edit addresses a specific version of a text document. Or it can contain
     * above `TextDocumentEdit`s mixed with create, rename and delete file / folder operations.
     * 
     * Whether a client supports versioned document edits is expressed via
     * `workspace.workspaceEdit.documentChanges` client capability.
     * 
     * If a client neither supports `documentChanges` nor `workspace.workspaceEdit.resourceOperations` then
     * only plain `TextEdit`s using the `changes` property are supported.
     *
     * @var array<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>|null
     */
    public $documentChanges;

    /**
     * A map of change annotations that can be referenced in `AnnotatedTextEdit`s or create, rename and
     * delete file / folder operations.
     * 
     * Whether clients honor this property depends on the client capability `workspace.changeAnnotationSupport`.
     *
     * @var array<mixed>|null
     */
    public $changeAnnotations;

    /**
     * @param array<mixed>|null $changes
     * @param array<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>|null $documentChanges
     * @param array<mixed>|null $changeAnnotations
     */
    public function __construct(?array $changes = null, ?array $documentChanges = null, ?array $changeAnnotations = null)
    {
        $this->changes = $changes;
        $this->documentChanges = $documentChanges;
        $this->changeAnnotations = $changeAnnotations;
    }

    /**
     * @param array<string,mixed> $array
     * @return static
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        $map = [
            'changes' => ['names' => [], 'iterable' => false],
            'documentChanges' => ['names' => [], 'iterable' => true],
            'changeAnnotations' => ['names' => [], 'iterable' => false],
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