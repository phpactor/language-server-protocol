<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters of a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class WorkspaceSymbolParams
{
    /**
     * A query string to filter symbols by. Clients may send an empty
     * string here to request all symbols.
     *
     * @var string
     */
    public $query;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * An optional token that a server can use to report partial results (e.g. streaming) to
     * the client.
     *
     * @var int|string|null
     */
    public $partialResultToken;

    /**
     * @param string $query
     * @param int|string|null $workDoneToken
     * @param int|string|null $partialResultToken
     */
    public function __construct(string $query, $workDoneToken = null, $partialResultToken = null)
    {
        $this->query = $query;
        $this->workDoneToken = $workDoneToken;
        $this->partialResultToken = $partialResultToken;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}