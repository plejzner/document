<?php

declare(strict_types=1);

namespace Document;

// abstract Creator
abstract class Document
{
    private array $paragraphs;

    // abstract factory method
    abstract protected function createParagraph(string $text): Paragraph;

    abstract protected function getFileExtension(): string;

    public function addParagraph(string $text): void
    {
        $this->paragraphs[] = $this->createParagraph($text);
    }

    // abstract Creator logic operating on abstract Products
    public function generateDocumentFile($name): void
    {
        $docBody = '';
        foreach ($this->paragraphs as $paragraph) {
            $docBody .= $paragraph->generate();
        }

        $filename = $name . $this->getFileExtension();
        file_put_contents($filename, $docBody);
    }
}
