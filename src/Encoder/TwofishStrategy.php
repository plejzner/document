<?php

declare(strict_types=1);

namespace Encoder;

class TwofishStrategy extends AbstractCipherStrategy
{
    protected function applyCipher($text, $password): string
    {
        return $text . ' encoded with Twofish';
    }
}
