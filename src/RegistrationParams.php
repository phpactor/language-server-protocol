<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

class RegistrationParams
{
    /**
     *
     * @var array<Registration>
     */
    public $registrations;

    /**
     * @param array<Registration> $registrations
     */
    public function __construct(array $registrations)
    {
        $this->registrations = $registrations;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}