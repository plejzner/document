<?php

declare(strict_types=1);

namespace Application;

use Document\Document;
use Document\DocumentFormatGenerator;
use Document\FileWriter;
use Document\HtmlFormatGenerator;
use Document\PlainTextFormatGenerator;
use InvalidArgumentException;

class DocumentsApplication
{
    private FileWriter $fileWriter;

    public function __construct()
    {
        $this->fileWriter = new FileWriter();
    }

    public function exportDocument(Document $document, string $name, string $format): void
    {
        $generator = $this->createGenerator($format);

        $this->fileWriter->write(
            $generator->generate($document),
            $name . '.' . $generator->getFormatFileExtension()
        );
    }

    private function createGenerator(string $format): DocumentFormatGenerator
    {
        if ($format === PlainTextFormatGenerator::FILE_EXTENSION) {
            return new PlainTextFormatGenerator();
        }

        if ($format === HtmlFormatGenerator::FILE_EXTENSION) {
            return new HtmlFormatGenerator();
        }

        throw new InvalidArgumentException('wrong format');
    }
}
