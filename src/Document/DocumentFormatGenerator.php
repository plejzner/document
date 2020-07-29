<?php

declare(strict_types=1);

namespace Document;

/**
 * Generates document body.
 * Client in Abstract Factory pattern.
 * Uses Abstract Factory to create ElementGenerators, and uses them through their interface.
 */
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
