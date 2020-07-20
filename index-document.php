<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Application\DocumentsApplication;
use Document\Document;

$app = new DocumentsApplication();

$doc = new Document();
$doc->addHeader('Great Header', 1)
    ->addParagraph('This is first paragraph. Lorem ipsum dolor.')
    ->addHeader('Less important header', 2)
    ->addParagraph('And the second paragraph is here. Lorem ipsum dolor.');

$app->exportDocument($doc, 'my-document', 'txt');
$app->exportDocument($doc, 'my-document', 'html');