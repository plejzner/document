<?php

namespace Document;

/**
 * Product Interface in Factory Method pattern.
 * Generates body of document Element.
 */
interface ElementGenerator
{
    public function generate(): string;
}
