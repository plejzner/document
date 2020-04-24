<?php

declare(strict_types=1);

namespace Document;

class PlainTextDocumentGenerator extends DocumentGenerator
{
    protected function createParagraphGen(string $text): ParagraphGenerator
    {
        return new PlainTextParagraphGenerator($text);
    }

    protected function createHeaderGen(string $text, int $level): HeaderGenerator
    {
        return new PlainTextHeaderGenerator($text, $level);
    }

    protected function getFileExtension(): string
    {
        return '.txt';
    }
}
