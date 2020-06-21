<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Provider options for a [DocumentLinkRequest](#DocumentLinkRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentLinkOptions
{
    /**
     * Document links have a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $resolveProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $resolveProvider = null, ?bool $workDoneProgress = null)
    {
        $this->resolveProvider = $resolveProvider;
        $this->workDoneProgress = $workDoneProgress;
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