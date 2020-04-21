<?php

namespace Encoder;

interface CipherStrategy
{
    public function __construct(?CipherStrategy $wrappedCipherStrategy);

    public function encode(string $text, string $password): string;
}
