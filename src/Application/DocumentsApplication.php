<?php

declare(strict_types=1);

namespace Application;

use Document\Document;
use Document\DocumentFormatGenerator;
use Document\FileWriter;
use Document\Html\HtmlFormatGenerator;
use Document\PlainText\PlainTextFormatGenerator;

class DocumentsApplication
{
    private FileWriter $fileWriter;

    public function __construct()
    {
        $this->fileWriter = new FileWriter();
    }

    public function exportDocAsText(Document $document, string $name): string
    {
        return $this->exportDocument($document, $name, new PlainTextFormatGenerator());
    }

    public function exportDocAsHtml(Document $document, string $name): string
    {
        return $this->exportDocument($document, $name, new HtmlFormatGenerator());
    }

    private function exportDocument(Document $document, string $name, DocumentFormatGenerator $generator): string
    {
        $filename = $name . '.' . $generator->getFormatFileExtension();
        return ($this->fileWriter)($generator->generate($document), $filename);
    }
}
