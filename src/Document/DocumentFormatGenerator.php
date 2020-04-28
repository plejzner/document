<?php

declare(strict_types=1);

namespace Document;

// abstract Creator
abstract class DocumentFormatGenerator
{
    /**
     * @var ElementGenerator[]
     */
    private array $elementGenerators;

    public function __construct(Document $document)
    {
        foreach ($document->getElements() as $element) {
            $this->elementGenerators[] = $this->createElementGenerator($element);
        }
    }

    // abstract factory method
    abstract protected function createElementGenerator(Element $element): ElementGenerator;

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
