<?php

declare(strict_types=1);

namespace Document;

class PlainTextHeaderGenerator extends HeaderGenerator
{
    public function generate(): string
    {
        if ($this->level === 1) {
            return "------------\n" . $this->text . "\n------------\n\n";
        }

        return '--- ' . $this->text . " ---\n\n";
    }
}
