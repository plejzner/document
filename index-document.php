<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\Document;
use Document\HtmlFormatGenerator;
use Document\PlainTextFormatGenerator;

$doc = new Document();
$doc->addHeader('Great Header', 1)
    ->addParagraph('This is first paragraph and new stuff. Some more.')
    ->addHeader('Less important header', 2)
    ->addParagraph('And the second paragraph is here. Brand new and shiny.');

$htmlDocGen = new HtmlFormatGenerator($doc);
$htmlDocGen->generate('new-document');

$txtDocGen = new PlainTextFormatGenerator($doc);
$txtDocGen->generate('new-document');
