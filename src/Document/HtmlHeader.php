<?php

declare(strict_types=1);

namespace Document;

class HtmlHeader extends Header
{
    public function generate(): string
    {
        $tagOpen = '<h' . $this->level . '>';
        $tagClose = '</h' . $this->level . '>';

        return $tagOpen . $this->text . $tagClose;
    }
}
