<?php

declare(strict_types=1);

namespace Document;

use InvalidArgumentException;

class HtmlElementFactory implements ElementGeneratorFactory
{
    public function createElementGenerator(Element $element): ElementGenerator
    {
        if ($element instanceof Paragraph) {
            return new HtmlParagraphGenerator($element);
        }

        if ($element instanceof Header) {
            return new HtmlHeaderGenerator($element);
        }

        throw new InvalidArgumentException('unknown element');
    }
}
