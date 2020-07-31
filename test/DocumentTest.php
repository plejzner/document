<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use Application\DocumentsApplication;
use Document\Document;

class DocumentTest extends TestCase
{
    const EXPECTED_TEXT_FILE_PATH = __DIR__ . '/expected-text.txt';
    const EXPECTED_HTML_FILE_PATH = __DIR__ . '/expected-html.html';

    public function test_document_exports_correctly_in_text_and_html_formats()
    {
        $doc = new Document();
        $doc->addHeader('Great Header', 1)
            ->addParagraph('This is first test paragraph. Test test.')
            ->addHeader('Less important header', 2)
            ->addParagraph('And the second test paragraph is here. Test test.');

        $app = new DocumentsApplication();
        $actualTextFilePath = $app->exportDocAsText($doc, 'test-document');
        $actualHtmlFilePath = $app->exportDocAsHTML($doc, 'test-document');

        self::assertFileEquals(self::EXPECTED_TEXT_FILE_PATH, $actualTextFilePath);
        self::assertFileEquals(self::EXPECTED_HTML_FILE_PATH, $actualHtmlFilePath);
    }
}