<?php

declare(strict_types=1);

namespace Document;

class HtmlFormatGenerator extends DocumentFormatGenerator
{
    public const FILE_EXTENSION = 'html';

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
