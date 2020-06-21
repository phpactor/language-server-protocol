PHP Language Server Protocol Generator
======================================

[![Build Status](https://travis-ci.org/phpactor/language-server-protocol.svg?branch=master)](https://travis-ci.org/phpactor/language-server-protocol)

This package _transpiles_ the `vscode-language-server-protocol` library to PHP,
providing the protocol classes required to create Language Server
with PHP.

Generation
----------

Re-generate the source code with:

```
$ composer integrate
```

This will:

- Compile the typescript
- Generate the code
- Run static analysis
- Run tests

Other useful commands:

- `npm run watch`: Watch and compile on Typescript changes.
- `nodejs build/transpile.js`: Run the transpiler

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
