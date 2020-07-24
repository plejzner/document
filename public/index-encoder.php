<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Encoder\CustomStrategy;
use Encoder\Encoder;
use Encoder\SerpentStrategy;
use Encoder\TwofishStrategy;

$e = new Encoder(new SerpentStrategy());
echo $e->encode('secret text', 'pass01');
echo "\n\n";

$e = new Encoder(new SerpentStrategy(new TwofishStrategy()));
echo $e->encode('secret text', 'pass01');
echo "\n\n";

$e = new Encoder(new SerpentStrategy(new TwofishStrategy(new CustomStrategy())));
echo $e->encode('secret text', 'pass01');
echo "\n\n";