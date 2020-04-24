<?php

namespace Document;

// abstract Product
abstract class ParagraphGenerator implements ElementGenerator
{
    protected Paragraph $paragraph;

    public function __construct(Paragraph $paragraph)
    {
        $this->paragraph = $paragraph;
    }
}
