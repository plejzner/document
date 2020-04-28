<?php

namespace Document;

// Abstract Factory
interface ElementGeneratorFactory
{
    public function createElementGenerator(Element $element): ElementGenerator;
}
