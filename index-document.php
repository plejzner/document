<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\HtmlDocument;
use Document\PlainTextDocument;

$d = new HtmlDocument();
$d->addParagraph('This is first paragraph');
$d->addParagraph('And the second one');
$d->generateDocumentFile('new-document');

$d = new PlainTextDocument();
$d->addParagraph('This is first paragraph');
$d->addParagraph('And the second one');
$d->generateDocumentFile('new-document');