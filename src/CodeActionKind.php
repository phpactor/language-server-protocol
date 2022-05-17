<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

interface CodeActionKind
{
    public const EMPTY = '';
    public const QUICK_FIX = 'quickfix';
    public const REFACTOR = 'refactor';
    public const REFACTOR_EXTRACT = 'refactor.extract';
    public const REFACTOR_INLINE = 'refactor.inline';
    public const REFACTOR_REWRITE = 'refactor.rewrite';
    public const SOURCE = 'source';
    public const SOURCE_ORGANIZE_IMPORTS = 'source.organizeImports';
    public const SOURCE_FIX_ALL = 'source.fixAll';
}