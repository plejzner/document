<?php

declare(strict_types=1);

namespace Document\Html;

use Document\Document;
use Document\DocumentFormatGenerator;

/**
 * Responsible for Html specific details in document body generation (wraps all doc body in tags).
 */
class HtmlFormatGenerator extends DocumentFormatGenerator
{
    private const FILE_EXTENSION = 'html';

    public function __construct()
    {
        parent::__construct(new HtmlElementFactory);
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
