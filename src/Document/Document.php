<?php

declare(strict_types=1);

namespace Document;

// abstract Creator
abstract class Document
{
    private array $elements;

    // abstract factory method
    abstract protected function createParagraph(string $text): Paragraph;

    // abstract factory method
    abstract protected function createHeader(string $text, int $level): Header;

    // abstract almost factory method? ;)
    abstract protected function getFileExtension(): string;

    public function addParagraph(string $text): void
    {
        $this->elements[] = $this->createParagraph($text);
    }

    public function addHeader(string $text, int $level): void
    {
        $this->elements[] = $this->createHeader($text, $level);
    }

    // abstract Creator logic operating on abstract Products
    public function generateDocumentFile($name): void
    {
        $docBody = '';
        foreach ($this->elements as $element) {
            $docBody .= $element->generate();
        }

        $filename = $name . $this->getFileExtension();
        file_put_contents($filename, $docBody);
    }
}
