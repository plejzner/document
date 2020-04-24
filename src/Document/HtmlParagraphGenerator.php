<?php

declare(strict_types=1);

namespace Document;

// concrete Product
class HtmlParagraphGenerator extends ParagraphGenerator
{
    public function generate(): string
    {
        return '<p>' . $this->text . '</p>';
    }
}
