<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\Document;
use Document\HtmlDocumentGenerator;
use Document\PlainTextDocumentGenerator;

$doc = new Document();
$doc->addHeader('Great Header', 1)
    ->addParagraph('This is first paragraph and new stuff. Some more.')
    ->addHeader('Less important header', 2)
    ->addParagraph('And the second paragraph is here. Brand new and shiny.');

$htmlDocGen = new HtmlDocumentGenerator($doc);
$htmlDocGen->generate('new-document');

$txtDocGen = new PlainTextDocumentGenerator($doc);
$txtDocGen->generate('new-document');
