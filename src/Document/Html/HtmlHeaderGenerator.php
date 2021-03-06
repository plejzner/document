<?php

declare(strict_types=1);

namespace Document\Html;

use Document\HeaderGenerator;

class HtmlHeaderGenerator extends HeaderGenerator
{
    public function generate(): string
    {
        $tagOpen = '<h' . $this->header->getLevel() . '>';
        $tagClose = '</h' . $this->header->getLevel() . '>';

        return $tagOpen . $this->header->getText() . $tagClose;
    }
}
