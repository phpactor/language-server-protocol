<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class UnregistrationParams
{
    /**
     *
     * @var array<Unregistration>
     */
    public $unregisterations;

    /**
     * @param array<Unregistration> $unregisterations
     */
    public function __construct(array $unregisterations)
    {
        $this->unregisterations = $unregisterations;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}