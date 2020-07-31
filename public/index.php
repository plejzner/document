<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Application\DocumentsApplication;
use Document\Document;

$app = new DocumentsApplication();

$doc = new Document();
$doc->addHeader('Great Header', 1)
    ->addParagraph('This is first paragraph. Lorem ipsum dolor.')
    ->addHeader('Less important header', 2)
    ->addParagraph('And the second paragraph is here. Lorem ipsum dolor.');

$txtFilePath = $app->exportDocAsText($doc, 'my-document');
$htmlFilePath = $app->exportDocAsHTML($doc, 'my-document');

echo $txtFilePath . "\n";
echo $htmlFilePath . "\n";