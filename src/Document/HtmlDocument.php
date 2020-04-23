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

    protected function getFileExtension(): string
    {
        return '.html';
    }
}
