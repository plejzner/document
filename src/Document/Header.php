<?php

declare(strict_types=1);

namespace Document;

class Header
{
    private string $text;
    private int $level;

    public function __construct(string $text, int $level)
    {
        $this->text = $text;
        $this->level = $level;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getLevel(): int
    {
        return $this->level;
    }
}
