<?php

declare(strict_types=1);

namespace Document;

class PlainTextFormatGenerator extends DocumentFormatGenerator
{
    public const FILE_EXTENSION = 'txt';

    public function __construct()
    {
        parent::__construct(new PlainTextElementFactory);
    }

    public function getFormatFileExtension(): string
    {
        return self::FILE_EXTENSION;
    }
}
