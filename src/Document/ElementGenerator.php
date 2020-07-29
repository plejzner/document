<?php

namespace Document;

/**
 * Product Interface in Abstract Factory pattern.
 * Generates body of document Element.
 */
interface ElementGenerator
{
    public function generate(): string;
}
