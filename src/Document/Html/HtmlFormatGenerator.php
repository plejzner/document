<?php

declare(strict_types=1);

namespace Document\Html;

use Document\Document;
use Document\DocumentFormatGenerator;
use Document\Element;
use Document\ElementGenerator;
use Document\Header;
use Document\Paragraph;
use InvalidArgumentException;

/**
 * Responsible for Html specific details in document body generation (wraps all doc body in tags).
 *
 * In Factory Method version also responsible for producing ElementGenerators. This shows how Abstract Factory
 * gives us better separation of concerns.
 */
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
