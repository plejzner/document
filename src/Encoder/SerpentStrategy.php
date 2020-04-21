<?php

declare(strict_types=1);

namespace Encoder;

class SerpentStrategy extends AbstractCipherStrategy
{
    protected function applyCipher($text, $password): string
    {
        return $text . ' encoded with Serpent';
    }
}
