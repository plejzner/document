<?php

namespace Document;

// abstract Product
abstract class ParagraphGenerator implements ElementGenerator
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
