<?php

namespace LanguageServerProtocol;

class TextDocumentSyncOptions
{
    /**
     * Open and close notifications are sent to the server. If omitted open close notification should not
     * be sent.
     *
     * @var string
     */
    public $openClose;

    /**
     * Change notifications are sent to the server. See TextDocumentSyncKind.None, TextDocumentSyncKind.Full
     * and TextDocumentSyncKind.Incremental. If omitted it defaults to TextDocumentSyncKind.None.
     *
     * @var TextDocumentSyncKind
     */
    public $change;

    /**
     * If present will save notifications are sent to the server. If omitted the notification should not be
     * sent.
     *
     * @var string
     */
    public $willSave;

    /**
     * If present will save wait until requests are sent to the server. If omitted the request should not be
     * sent.
     *
     * @var string
     */
    public $willSaveWaitUntil;

    /**
     * If present save notifications are sent to the server. If omitted the notification should not be
     * sent.
     *
     * @var SaveOptions
     */
    public $save;

    public function __construct(string $openClose, TextDocumentSyncKind $change, string $willSave, string $willSaveWaitUntil, SaveOptions $save)
    {
        $this->$openClose = $this->$openClose;
        $this->$change = $this->$change;
        $this->$willSave = $this->$willSave;
        $this->$willSaveWaitUntil = $this->$willSaveWaitUntil;
        $this->$save = $this->$save;
    }
}