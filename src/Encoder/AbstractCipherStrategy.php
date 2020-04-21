<?php

declare(strict_types=1);

namespace Encoder;

abstract class AbstractCipherStrategy implements CipherStrategy
{
    protected ?CipherStrategy $wrappedCipherStrategy;

    public function __construct(?CipherStrategy $wrappedCipherStrategy = null)
    {
        $this->wrappedCipherStrategy = $wrappedCipherStrategy;
    }

    public function encode(string $text, string $password): string
    {
        $encodedText = $this->applyCipher($text, $password);

        if ($this->wrappedCipherStrategy !== null) {
            return $this->wrappedCipherStrategy->encode($encodedText, $password);
        }

        return $encodedText;
    }

    abstract protected function applyCipher($text, $password): string;
}
