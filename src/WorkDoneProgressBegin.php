<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class WorkDoneProgressBegin
{
    /**
     *
     * @var 'begin'
     */
    public $kind;

    /**
     * Mandatory title of the progress operation. Used to briefly inform about
     * the kind of operation being performed.
     * 
     * Examples: "Indexing" or "Linking dependencies".
     *
     * @var string
     */
    public $title;

    /**
     * Controls if a cancel button should show to allow the user to cancel the
     * long running operation. Clients that don't support cancellation are allowed
     * to ignore the setting.
     *
     * @var bool|null
     */
    public $cancellable;

    /**
     * Optional, more detailed associated progress message. Contains
     * complementary information to the `title`.
     * 
     * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
     * If unset, the previous progress message (if any) is still valid.
     *
     * @var string|null
     */
    public $message;

    /**
     * Optional progress percentage to display (value 100 is considered 100%).
     * If not provided infinite progress is assumed and clients are allowed
     * to ignore the `percentage` value in subsequent in report notifications.
     * 
     * The value should be steadily rising. Clients are free to ignore values
     * that are not following this rule.
     *
     * @var int|null
     */
    public $percentage;

    /**
     * @param 'begin' $kind
     * @param string $title
     * @param bool|null $cancellable
     * @param string|null $message
     * @param int|null $percentage
     */
    public function __construct($kind, string $title, ?bool $cancellable = null, ?string $message = null, ?int $percentage = null)
    {
        $this->kind = $kind;
        $this->title = $title;
        $this->cancellable = $cancellable;
        $this->message = $message;
        $this->percentage = $percentage;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'kind' => ['names' => [], 'iterable' => false],
            'title' => ['names' => [], 'iterable' => false],
            'cancellable' => ['names' => [], 'iterable' => false],
            'message' => ['names' => [], 'iterable' => false],
            'percentage' => ['names' => [], 'iterable' => false],
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

        throw $exception;
    }
        
}