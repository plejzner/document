<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\HtmlDocument;
use Document\PlainTextDocument;

// hmm - powinno być tylko raz definiowanie dokumentu
// Klasa Document nie musi być abstract :)

$d = new HtmlDocument();
$d->addHeader('Great Header', 1);
$d->addParagraph('This is first paragraph');
$d->addHeader('smaller header', 2);
$d->addParagraph('And the second paragraph is here');
$d->generateDocumentFile('new-document');

$d = new PlainTextDocument();
$d->addHeader('Great Header', 1);
$d->addParagraph('This is first paragraph');
$d->addHeader('smaller header', 2);
$d->addParagraph('And the second paragraph is here');
$d->generateDocumentFile('new-document');