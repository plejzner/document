<?php

declare(strict_types=1);

namespace Document;

class Document
{
    /**
     * @var Element[]
     */
    private array $elements;

    public function addParagraph(string $text): Document
    {
        $this->elements[] = new Paragraph($text);
        return $this;
    }

    public function addHeader(string $text, $level): Document
    {
        $this->elements[] = new Header($text, $level);
        return $this;
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}
