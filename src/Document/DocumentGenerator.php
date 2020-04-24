<?php

declare(strict_types=1);

namespace Document;

// abstract Creator
abstract class DocumentGenerator
{
    /**
     * @var ElementGenerator[]
     */
    private array $elementGenerators;

    public function __construct(Document $document)
    {
        foreach ($document->getElements() as $element) {
            if ($element instanceof Paragraph) {
                $this->elementGenerators[] = $this->createParagraphGen($element->getText());
            }
            if ($element instanceof Header) {
                $this->elementGenerators[] = $this->createHeaderGen($element->getText(), $element->getLevel());
            }
        }
    }

    // abstract factory method
    abstract protected function createParagraphGen(string $text): ParagraphGenerator;

    // abstract factory method
    abstract protected function createHeaderGen(string $text, int $level): HeaderGenerator;

    // abstract almost factory method? ;)
    abstract protected function getFileExtension(): string;

    // AbstractCreator logic operating on abstract Products
    public function generate($name): void
    {
        $docBody = '';
        foreach ($this->elementGenerators as $elementGenerator) {
            $docBody .= $elementGenerator->generate();
        }

        $filename = $name . $this->getFileExtension();
        file_put_contents($filename, $docBody);
    }
}
