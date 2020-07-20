<?php

declare(strict_types=1);

namespace Document;

abstract class DocumentFormatGenerator
{
    private ElementGeneratorFactory $abstractFactory;

    public function __construct(ElementGeneratorFactory $abstractFactory)
    {
        $this->abstractFactory = $abstractFactory;
    }

    // logic operating on abstract Products
    public function generate(Document $document): string
    {
        $docBody = '';
        foreach ($document->getElements() as $element) {
            $elementGenerator = $this->abstractFactory->createElementGenerator($element);
            $docBody .= $elementGenerator->generate();
        }

        return $docBody;
    }

    abstract public function getFormatFileExtension(): string;
}
