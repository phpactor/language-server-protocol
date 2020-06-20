<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

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
}