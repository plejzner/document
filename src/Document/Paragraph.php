<?php

namespace Document;

// abstract Product
abstract class Paragraph implements Element
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
