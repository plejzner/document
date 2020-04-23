<?php

declare(strict_types=1);

namespace Document;

// concrete Product
class HtmlParagraph extends Paragraph
{
    public function generate(): string
    {
        return '<p>' . $this->text . '</p>';
    }
}
