<?php

declare(strict_types=1);

namespace Encoder;

class Encoder
{
    private CipherStrategy $cipherStrategy;

    public function __construct(CipherStrategy $cipherStrategy)
    {
        $this->cipherStrategy = $cipherStrategy;
    }

    public function encode(string $text, string $password): string
    {
        return $this->cipherStrategy->encode($text, $password);
    }
}
