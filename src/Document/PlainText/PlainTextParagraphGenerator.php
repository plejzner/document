<?php

declare(strict_types=1);

namespace Document\PlainText;

use Document\ParagraphGenerator;

class PlainTextParagraphGenerator extends ParagraphGenerator
{
    public function generate(): string
    {
        return "\t" . $this->paragraph->getText() . "\n\n";
    }
}
