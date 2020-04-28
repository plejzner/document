<?php

declare(strict_types=1);

namespace Document;

class DocumentFormatGenerator
{
    private ElementGeneratorFactory $abstractFactory;

    public function __construct(ElementGeneratorFactory $abstractFactory)
    {
        $this->abstractFactory = $abstractFactory;
    }

    // logic operating on abstract Products
    public function generate(Document $document, $fileName): void
    {
        $docBody = '';
        foreach ($document->getElements() as $element) {
            $elementGenerator = $this->abstractFactory->createElementGenerator($element);
            $docBody .= $elementGenerator->generate();
        }

        file_put_contents($fileName, $docBody);
    }
}
