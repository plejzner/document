<?php

namespace Document;

// abstract Product
abstract class Paragraph
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    abstract public function generate(): string;
}
