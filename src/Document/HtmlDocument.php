<?php

declare(strict_types=1);

namespace Document;

// concrete Creator
class HtmlDocument extends Document
{
    // concrete factory method
    protected function createParagraph(string $text): Paragraph
    {
        return new HtmlParagraph($text);
    }

    // concrete factory method
    protected function createHeader(string $text, int $level): Header
    {
        return new HtmlHeader($text, $level);
    }

    // concrete almost factory method ;)
    protected function getFileExtension(): string
    {
        return '.html';
    }
}
