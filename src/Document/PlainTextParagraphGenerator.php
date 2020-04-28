<?php

declare(strict_types=1);

namespace Document;

class PlainTextParagraphGenerator extends ParagraphGenerator
{
    public function generate(): string
    {
        return "\t" . $this->paragraph->getText() . "\n\n";
    }
}
