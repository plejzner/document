<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Document\Document;
use Document\DocumentFormatGenerator;
use Document\HtmlElementFactory;
use Document\PlainTextElementFactory;

$doc = new Document();
$doc->addHeader('Great Header', 1)
    ->addParagraph('This is first paragraph. Lorem ipsum dolor.')
    ->addHeader('Less important header', 2)
    ->addParagraph('And the second paragraph is here. Lorem ipsum dolor.');

// injecting chosen Concrete Factory during Generator setup
$htmlDocGen = new DocumentFormatGenerator(new HtmlElementFactory);
$txtDocGen = new DocumentFormatGenerator(new PlainTextElementFactory);

$htmlDocGen->generate($doc,'document.html');
$txtDocGen->generate($doc, 'document.txt');


// btw w tej wersji nadal mogą istnieć podklasy HtmlFormatGenerator i PlainTextFormatGenerator
// tylko, że nie będą będą odpowiadały za kreowanie ElementGeneratorów
// .. ale np HtmlFormatGenerator może mieć logikę opakowywania całości w <html><body></></>
// .. mogą też zwracać file extension
// i wtedy elegancko będzie widać jak Abstract Factory w porównaniu do Template Method daje
// rozdzielenie odpowiedzialności i bardziej SRP kod