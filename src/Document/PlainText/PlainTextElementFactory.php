<?php

declare(strict_types=1);

namespace Document\PlainText;

use Document\Element;
use Document\ElementGenerator;
use Document\ElementGeneratorFactory;
use Document\Header;
use Document\Paragraph;
use InvalidArgumentException;

class PlainTextElementFactory implements ElementGeneratorFactory
{
    public function createElementGenerator(Element $element): ElementGenerator
    {
        if ($element instanceof Paragraph) {
            return new PlainTextParagraphGenerator($element);
        }

        if ($element instanceof Header) {
            return new PlainTextHeaderGenerator($element);
        }

        throw new InvalidArgumentException('unknown element');
    }
}
