<?php

declare(strict_types=1);

namespace Encoder;

class CustomStrategy extends AbstractCipherStrategy
{
    protected function applyCipher($text, $password): string
    {
        // possibly a lot of cryptography code here..

        return $text . ' encoded with our custom algorithm';
    }
}
