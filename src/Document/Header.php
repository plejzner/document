<?php

declare(strict_types=1);

namespace Document;

abstract class Header implements Element
{
    protected string $text;
    protected int $level;

    public function __construct(string $text, int $level)
    {
        $this->text = $text;
        $this->level = $level;
    }
}
