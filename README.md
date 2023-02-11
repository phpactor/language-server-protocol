PHP Language Server Protocol Generator
======================================

![CI](https://github.com/phpactor/language-server-protocol/workflows/CI/badge.svg)

This package _transpiles_ the `vscode-language-server-protocol` library to PHP,
providing the protocol classes required to create Language Server
with PHP.

Notes on using the library
--------------------------

Most (if not all) of the upstream Typescript types have no constructors,
therefore the argument order of the constructors can change on _every
release_.

It is therefore **strongly recommended** to use named arguments.

Generation
----------

Generating the code:

- `npm run generate`: Build and transpile
- `npm run watch`: Watch and compile on Typescript changes.

Running the PHP tests:

- `composer integrate`

Usage
-----

### Deserialization

This library will use the type information form typescript to generate
`fromArray` static constructors for each type:

```php
$item = CompletionItem::fromArray([
    'label' => 'Foobar',
    'kind' => 1,
    'detail' => 'This is foobar',
    'documentation' => [
        'kind' => 'markdown',
        'value' => 'Foobar',
    ],
    'additionalTextEdits' => [
        [
            'range' => [
                'start' => [
                    'line' => 5,
                    'character' => 10,
                ],
                'end' => [
                    'line' => 10,
                    'character' => 10,
                ],
            ],
            'newText' => 'Foobar',
        ],
    ],
    'command' => [
        'title' => 'Foobar',
        'command' => 'my.command',
    ],
]);
```

Will return a fully hydrated completion item with concrete sub-types.

**NOTE**: that when deserializing from a language server client request, it is
probably a good idea to ignore additional parameters (the second argument to
`fromArray`). This is because it is perfectly valid to pass unknown properties
to some of the LSP objects.

### Serialization

Properties in classes are public to enable JSON serialization. Call
`json_encode($lspObject)` to get the valid LSP JSON object.

Contributing
------------

This package is open source and welcomes contributions! Feel free to open a
pull request on this repository.

Support
-------

- Create an issue on the main [Phpactor](https://github.com/phpactor/phpactor) repository.
- Join the `#phpactor` channel on the Slack [Symfony Devs](https://symfony.com/slack-invite) channel.
