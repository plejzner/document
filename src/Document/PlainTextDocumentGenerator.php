<?php

declare(strict_types=1);

namespace Document;

class PlainTextDocumentGenerator extends DocumentGenerator
{
    protected function createParagraph(string $text): ParagraphGenerator
    {
        return new PlainTextParagraphGenerator($text);
    }

    protected function createHeader(string $text, int $level): HeaderGenerator
    {
        return new PlainTextHeaderGenerator($text, $level);
    }

    protected function getFileExtension(): string
    {
        return '.txt';
    }
}
