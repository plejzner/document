<?php

declare(strict_types=1);

namespace Document;

use InvalidArgumentException;

class HtmlFormatGenerator extends DocumentFormatGenerator
{
    private const FILE_EXTENSION = 'html';

    // Factory Method
    protected function createElementGenerator(Element $element): ElementGenerator
    {
        if ($element instanceof Paragraph) {
            return new HtmlParagraphGenerator($element);
        }

        if ($element instanceof Header) {
            return new HtmlHeaderGenerator($element);
        }

        throw new InvalidArgumentException('unknown element');
    }

    public function generate(Document $document): string
    {
        $docBody = '<html><body>';
        $docBody .= parent::generate($document);
        $docBody .= '</body></html>';

        return $docBody;
    }

    public function getFormatFileExtension(): string
    {
        return self::FILE_EXTENSION;
    }
}
