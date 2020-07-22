<?php

declare(strict_types=1);

namespace Document;

abstract class DocumentFormatGenerator
{
    // Factory Method
    abstract protected function createElementGenerator(Element $element): ElementGenerator;

    // logic operating on abstract Products
    public function generate(Document $document): string
    {
        $docBody = '';
        foreach ($document->getElements() as $element) {
            $elementGenerator = $this->createElementGenerator($element);
            $docBody .= $elementGenerator->generate();
        }

        return $docBody;
    }

    abstract public function getFormatFileExtension(): string;
}
