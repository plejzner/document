<?php

declare(strict_types=1);

namespace Document\PlainText;

use Document\DocumentFormatGenerator;
use Document\Element;
use Document\ElementGenerator;
use Document\Header;
use Document\Paragraph;
use InvalidArgumentException;

class PlainTextFormatGenerator extends DocumentFormatGenerator
{
    private const FILE_EXTENSION = 'txt';

    // Factory Method
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

    public function getFormatFileExtension(): string
    {
        return self::FILE_EXTENSION;
    }
}
