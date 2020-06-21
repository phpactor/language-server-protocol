<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents the signature of something callable. A signature
 * can have a label, like a function-name, a doc-comment, and
 * a set of parameters.
 */
class SignatureInformation
{
    /**
     * The label of this signature. Will be shown in
     * the UI.
     *
     * @var string
     */
    public $label;

    /**
     * The human-readable doc-comment of this signature. Will be shown
     * in the UI but can be omitted.
     *
     * @var string|MarkupContent|null
     */
    public $documentation;

    /**
     * The parameters of this signature.
     *
     * @var array<ParameterInformation>|null
     */
    public $parameters;

    /**
     * @param string $label
     * @param string|MarkupContent|null $documentation
     * @param array<ParameterInformation>|null $parameters
     */
    public function __construct(string $label, $documentation = null, ?array $parameters = null)
    {
        $this->label = $label;
        $this->documentation = $documentation;
        $this->parameters = $parameters;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'documentation' => [MarkupContent::class],
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