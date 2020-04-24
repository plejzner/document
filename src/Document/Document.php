<?php

declare(strict_types=1);

namespace Document;

class Document
{
    /**
     * @var Element[]
     */
    private array $elements;

    public function addParagraph(string $text): void
    {
        $this->elements[] = new Paragraph($text);
    }

    public function addHeader(string $text, $level): void
    {
        $this->elements[] = new Header($text, $level);
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}
