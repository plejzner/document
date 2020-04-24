<?php

declare(strict_types=1);

namespace Document;

// abstract Creator
abstract class DocumentGenerator
{
    /**
     * @var ElementGenerator[]
     */
    private array $elements;

    public function __construct(Document $document)
    {
        foreach ($document->getElements() as $element) {
            if ($element instanceof Paragraph) {
                $this->addParagraph($element->getText());
            }
            if ($element instanceof Header) {
                $this->addHeader($element->getText(), $element->getLevel());
            }
        }
    }

    // abstract factory method
    abstract protected function createParagraph(string $text): ParagraphGenerator;

    // abstract factory method
    abstract protected function createHeader(string $text, int $level): HeaderGenerator;

    // abstract almost factory method? ;)
    abstract protected function getFileExtension(): string;

    private function addParagraph(string $text): void
    {
        $this->elements[] = $this->createParagraph($text);
    }

    private function addHeader(string $text, int $level): void
    {
        $this->elements[] = $this->createHeader($text, $level);
    }

    // AbstractCreator logic operating on abstract Products
    public function generate($name): void
    {
        $docBody = '';
        foreach ($this->elements as $element) {
            $docBody .= $element->generate();
        }

        $filename = $name . $this->getFileExtension();
        file_put_contents($filename, $docBody);
    }
}
