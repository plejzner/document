<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\Document;
use Document\HtmlDocumentGenerator;
use Document\PlainTextDocumentGenerator;

// hmm - powinno być tylko raz definiowanie dokumentu
// Klasa Document nie musi być abstract :)
//  ..ale to generuje masę zmian

// .. a może lepiej tak:
// $d = new PlainTextDocument()
// add Elements
// $htmlDoc = $d->convertToHtmlDocument()

// jednak chodzi o to, że Document powinien się nazywać DocumentFileGenerator
// wtedy można dodać klasę Document jako niezależny od formatu dokument i:
// $docGen = new HtmlDocumentGenerator($document);
// $docGen->generate('new-document');

$doc = new Document();
$doc->addHeader('Great Header', 1);
$doc->addParagraph('This is first paragraph and new stuff.');
$doc->addHeader('smaller header', 2);
$doc->addParagraph('And the second paragraph is here. Brand new and shiny.');

$htmlDocGen = new HtmlDocumentGenerator($doc);
$htmlDocGen->generate('new-document');

$txtDocGen = new PlainTextDocumentGenerator($doc);
$txtDocGen->generate('new-document');
