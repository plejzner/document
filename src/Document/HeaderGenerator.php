<?php

declare(strict_types=1);

namespace Document;

abstract class HeaderGenerator implements ElementGenerator
{
    protected string $text;
    protected int $level;

    public function __construct(string $text, int $level)
    {
        $this->text = $text;
        $this->level = $level;
    }
}
