<?php

declare(strict_types=1);

namespace Document;

use RuntimeException;

class FileWriter
{
    private const FILES_PATH = 'documents/';

    public function __invoke($documentBody, $name): string
    {
        $fileName = self::FILES_PATH . $name;

        if (false === file_put_contents($fileName, $documentBody)) {
            throw new RuntimeException('error during writing file');
        }

        return $fileName;
    }
}
