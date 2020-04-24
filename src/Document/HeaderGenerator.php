<?php

declare(strict_types=1);

namespace Document;

abstract class HeaderGenerator implements ElementGenerator
{
    protected Header $header;

    public function __construct(Header $header)
    {
        $this->header = $header;
    }
}
