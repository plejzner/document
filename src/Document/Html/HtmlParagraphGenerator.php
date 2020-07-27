<?php

declare(strict_types=1);

namespace Document\Html;

use Document\ParagraphGenerator;

// concrete Product
class HtmlParagraphGenerator extends ParagraphGenerator
{
    public function generate(): string
    {
        return '<p>' . $this->paragraph->getText() . '</p>';
    }
}
