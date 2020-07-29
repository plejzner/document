<?php

namespace Document;

/**
 * Abstract Factory herself.
 * Creates ElementGenerator for given document Element.
 */
interface ElementGeneratorFactory
{
    public function createElementGenerator(Element $element): ElementGenerator;
}
