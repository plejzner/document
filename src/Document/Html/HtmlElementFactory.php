<?php

declare(strict_types=1);

namespace Document\Html;

use Document\Element;
use Document\ElementGenerator;
use Document\ElementGeneratorFactory;
use Document\Header;
use Document\Paragraph;
use InvalidArgumentException;

/**
 * Produces Html element generators.
 * Concrete Factory in Abstract Factory pattern.
 */
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
