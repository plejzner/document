<?php

declare(strict_types=1);

namespace Document;

class PlainTextDocument extends Document
{
    protected function createParagraph(string $text): Paragraph
    {
        return new PlainTextParagraph($text);
    }

    protected function getFileExtension(): string
    {
        return '.txt';
    }
}
