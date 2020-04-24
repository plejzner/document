<?php

declare(strict_types=1);

namespace Document;

// concrete Creator
class HtmlDocumentGenerator extends DocumentGenerator
{
    // concrete factory method
    protected function createParagraphGen(string $text): ParagraphGenerator
    {
        return new HtmlParagraphGenerator($text);
    }

    // concrete factory method
    protected function createHeaderGen(string $text, int $level): HeaderGenerator
    {
        return new HtmlHeaderGenerator($text, $level);
    }

    // concrete almost factory method ;)
    protected function getFileExtension(): string
    {
        return '.html';
    }
}
