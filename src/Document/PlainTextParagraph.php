<?php

declare(strict_types=1);

namespace Document;

class PlainTextParagraph extends Paragraph
{
    public function generate(): string
    {
        return $this->text . "\n\n";
    }
}
