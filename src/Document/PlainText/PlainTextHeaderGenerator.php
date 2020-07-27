<?php

declare(strict_types=1);

namespace Document\PlainText;

use Document\HeaderGenerator;

class PlainTextHeaderGenerator extends HeaderGenerator
{
    public function generate(): string
    {
        if ($this->header->getLevel() === 1) {
            return "------------\n" . $this->header->getText() . "\n------------\n\n";
        }

        return $this->header->getText() . "\n---------------------\n\n";
    }
}
