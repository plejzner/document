<?php

declare(strict_types=1);

namespace Document;

use InvalidArgumentException;

class PlainTextDocumentGenerator extends DocumentGenerator
{
    // concrete factory method
    protected function createElementGenerator(Element $element): ElementGenerator
    {
        if ($element instanceof Paragraph) {
            return new PlainTextParagraphGenerator($element);
        }

        if ($element instanceof Header) {
            return new PlainTextHeaderGenerator($element);
        }

        throw new InvalidArgumentException('unknown element');
    }

    protected function getFileExtension(): string
    {
        return '.txt';
    }
}
